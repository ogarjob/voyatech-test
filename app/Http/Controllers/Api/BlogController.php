<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return response()->json([
            'message'   => 'Fetched Successfully',
            'data'      => compact(['blogs'])
        ]);
    }

    public function store(StoreBlogRequest $request)
    {
        Blog::create($request->validated());

        return response()->json(['message' => 'Created Successfully']);
    }

    public function show(Request $request, Blog $blog)
    {
        $blog->load('posts');

        return response()->json([
            'message'   => 'Fetched Successfully',
            'data'      => compact(['blog'])
        ]);
    }

    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update($request->validated());

        return response()->json(['message' => 'Updated Successfully']);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return response()->json(['message' => 'Deleted Successfully']);
    }
}
