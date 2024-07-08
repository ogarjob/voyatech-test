<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $post->load('comments');

        return response()->json([
            'message'   => 'Fetched Successfully',
            'data'      => compact(['post'])
        ]);
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return response()->json(['message' => 'Updated Successfully']);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(['message' => 'Deleted Successfully']);
    }
}
