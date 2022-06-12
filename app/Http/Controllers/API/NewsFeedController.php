<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\Post;

class NewsFeedController extends Controller
{


    public function index()
    {
        return response([
            'posts' => Post::orderBy('created_at', 'desc')->with('user:id,name,profile_photo')->withCount('comments', 'likes')
                ->with('likes', function ($like) {
                    return $like->where('user_id', auth()->user()->id)
                        ->select('id', 'user_id', 'post_id')->get();
                })
                ->get()
        ], 200);
    }
    public function show($id)
    {
        return response([
            'post' => Post::where('id', $id)->withCount('comments', 'likes')->get()
        ], 200);
    }


    public function store(Request $request)
    {
        //validate fields
        $attrs = $request->validate([
            'body' => 'required|string',
            'image' => 'required|mimes:jpg,bmp,png'
        ]);


        $image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/posts_images'), $image_name);

        $post = Post::create([
            'body' => $attrs['body'],
            'user_id' => auth()->user()->id,
            'image' => $image_name,

        ]);

        // for now skip for post image

        return response([
            'message' => 'Post created.',
            'post' => $post,
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        if ($post->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permission denied.'
            ], 403);
        }

        //validate fields
        $attrs = $request->validate([
            'body' => 'required|string'
        ]);

        $post->update([
            'body' =>  $attrs['body']
        ]);

        // for now skip for post image

        return response([
            'message' => 'Post updated.',
            'post' => $post
        ], 200);
    }



    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        if ($post->user_id != auth()->user()->id) {
            return response([
                'message' => 'Permission denied.'
            ], 403);
        }

        $post->comments()->delete();
        $post->likes()->delete();
        $post->delete();

        return response([
            'message' => 'Post deleted.'
        ], 200);
    }

    // like or unlike
    public function likeOrUnlike($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response([
                'message' => 'Post not found.'
            ], 403);
        }

        $like = $post->likes()->where('user_id', auth()->user()->id)->first();

        // if not liked then like
        if (!$like) {
            Like::create([
                'post_id' => $id,
                'user_id' => auth()->user()->id
            ]);

            return response([
                'message' => 'Liked'
            ], 200);
        }
        // else dislike it
        $like->delete();

        return response([
            'message' => 'Disliked'
        ], 200);
    }


    public function single()
    {


        return response([

            "posts" => Post::all()
        ]);
    }
}
