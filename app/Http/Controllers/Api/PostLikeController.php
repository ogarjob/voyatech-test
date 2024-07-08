<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $post->likes()->updateOrCreate($request->validate(['user_id' => 'required']));

        return response()->json(['message' => 'Created Successfully']);
    }
}
