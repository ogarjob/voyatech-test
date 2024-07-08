<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
use App\Models\Blog;

class BlogPostController extends Controller
{
    public function index(Blog $blog)
    {
        $posts = $blog->posts->load('likes', 'comments');

        return response()->json([
            'message'   => 'Fetched Successfully',
            'data'      => compact(['posts'])
        ]);
    }

    public function store(StoreBlogPostRequest $request, Blog $blog)
    {
        $blog->posts()->create($request->validated());

        return response()->json(['message' => 'Created Successfully']);
    }
}
