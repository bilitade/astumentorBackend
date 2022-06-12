<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\NewsFeedController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\GroupController;
use App\Http\Controllers\API\Curriculum\CurriculumController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('school/{id}',[CurriculumController::class, 'schoolcourse']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/singlePost', [NewsFeedController::class,'single']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['auth:sanctum']], function() {

    // User
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/profile', [AuthController::class, 'update_profile']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Post
    Route::get('/posts', [NewsFeedController::class, 'index']); // all posts
    Route::post('/posts', [NewsFeedController::class, 'store']); // create post
    Route::get('/posts/{id}', [NewsFeedController::class, 'show']); // get single post
    Route::put('/posts/{id}', [NewsFeedController::class, 'update']); // update post
    Route::delete('/posts/{id}', [NewsFeedController::class, 'destroy']); // delete post

    // Comment
    Route::get('/posts/{id}/comments', [CommentController::class, 'index']); // all comments of a post
    Route::post('/posts/{id}/comments', [CommentController::class, 'store']); // create comment on a post
    Route::put('/comments/{id}', [CommentController::class, 'update']); // update a comment
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']); // delete a comment

    // Like
    Route::post('/posts/{id}/likes', [NewsFeedController::class, 'likeOrUnlike']); // like or dislike back a post

// groups

    Route::get('/groups/mygroup', [GroupController::class, 'myGroup']);
    Route::get('/groups/othergroup', [GroupController::class, 'otherGroup']);
    Route::get('/groups/{id}', [GroupController::class, 'show']);
    Route::post('/groups/{id}/join', [GroupController::class, 'join']);
    Route::post('/groups/{id}/leave', [GroupController::class, 'Leave']);




});





