<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\groups\Group;
use App\Models\groups\Member;
use App\Models\Like;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\File;

use App\Models\Post;
use App\Models\User;
use App\Notifications\GroupNotification;

class WebNewsFeedController extends Controller
{


    public function index()
    {
        $posts=Post::where('group_id',"=",null)->orderBy('created_at', 'desc')->with('user:id,name,profile_photo')->withCount('comments', 'likes')
        ->with('likes', function ($like) {
            return $like->where('user_id', auth()->user()->id)
                ->select('id', 'user_id', 'post_id')->get();
        })
        ->get();
        // dd($posts);
        return view('private.newsfeed')->with('posts', $posts);



    }
    public function show($id)
    {
        return response([
            'post' => Post::where('id', $id)->withCount('comments', 'likes')->get()
        ], 200);
    }


    public function store(Request $request)
    {


        //  dd($request->all());


        $validated = $request->validate([
            'body' => 'required|string',
            'image'=>'image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);
        //validate fields



        $image_name="";
        if ($request->hasFile('image')) {
        $image_name = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/uploads/posts_images'), $image_name);
        }



            $post = Post::create([
                'group_id'=>$request->group,
                'body' => $validated['body'],
                'user_id' => auth()->user()->id,
                'image' => $image_name,


            ]);
            if($request->group!=null)
            {

           $members=Member::where('group_id',$request->group)->get();
           $group=Group::findOrFail($request->group);
           $details = [ 'body' => "New Post in' {$group->name}'  " ];

      foreach($members as $member){

        $user= User::find($member->user_id);
        $user->notify(new GroupNotification($details));

      }

            }




        // // for now skip for post image

        // return response([
        //     'message' => 'Post created.',
        //     'post' => $post,
        // ], 200);

    return redirect()->back();
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



    public function destroy(Request $request)
    {



        $id = $request->id;
        $post = Post::findOrFail($id);
        $image_path = "uploads/product_image/" . $post->image;
        if (File::exists($image_path)) {
            //File::delete($image_path);
            File::delete($image_path);
        }
        $post->delete();
        return back()->with('success', 'Post Deleted.');
    }


    // like or unlike
    public function likeOrUnlike($id)
    {
        $post = Post::find($id);



        if (!$post) {

            return back()->with('error', 'Post  Not Found.');
            // return response([
            //     'message' => 'Post not found.'
            // ], 403);
        }

        $like = $post->likes()->where('user_id', auth()->user()->id)->first();

        // if not liked then like
        if (!$like) {
            Like::create([
                'post_id' => $id,
                'user_id' => auth()->user()->id
            ]);

            return redirect()->back();
        }
        // else dislike it
        $like->delete();

        return redirect()->back();
    }


    public function single()
    {


        return response([

            "posts" => Post::all()
        ]);
    }




}
