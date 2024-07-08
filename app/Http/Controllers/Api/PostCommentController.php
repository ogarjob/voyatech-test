<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $post->comments()->create($request->validate([
            'user_id'   => 'required',
            'body'      => 'required',
        ]));

        return response()->json(['message' => 'Created Successfully']);
    }
}
