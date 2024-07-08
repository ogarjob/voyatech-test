<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\BlogPostController;
use App\Http\Controllers\Api\PostCommentController;
use App\Http\Controllers\Api\PostLikeController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('blogs',         BlogController::class);
Route::apiResource('posts',         PostController::class)->except('index', 'store');
Route::apiResource('blogs.posts',   BlogPostController::class)->only('index', 'store');
Route::apiResource('posts.likes',   PostLikeController::class)->only('store');
Route::apiResource('posts.comments',PostCommentController::class)->only('store');
