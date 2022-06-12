<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\groups\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mygroup()
    {
        $user=Auth::user();
        $mygroups=$user->groups;


        return response()->json([
           'groups'=> $mygroups,

        ], 200);
    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function otherGroup()
    {
        $user=Auth::user();
        $mygroups=$user->groups;
         $allgroup=Group::all();


         $difference = $allgroup->diff($mygroups);

        return response([
            'groups'=>$difference
        ], 200);
    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::findorFail($id);
        $group->posts;
        return response()->json([

            'data' => $group
        ]);




    }

 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function join($id){
        $group = Group::findorFail($id);

        if (!$group) {
            return response([
                'message' => 'group not found'
            ], 403);
        }



        // $ismember = $group->members()->where('user_id',1)->get();
        $like = $group->members()->where('user_id', auth()->user()->id)->first();


        if (!$like) {

            $user = User::findorFail(auth()->user()->id);
            $group->members()->attach($user);

            return response([
                'message' => 'successfully joined'
            ], 200);
        }
        return response([
            "message"=>"already joined"
        ]);

     }

    public function Leave($id)
    {
        $group = Group::findorFail($id);

        if (!$group) {
            return response([
                'message' => 'group not found'
            ], 403);
        }



        // $ismember = $group->members()->where('user_id',1)->get();
        $like = $group->members()->where('user_id', auth()->user()->id)->first();

        // return response([
        //     'message' =>!$ismember
        // ], 200);


        // // if not liked then like
        if (!$like) {
            return response([
                'message' => 'something went wrong'
            ], 200);
        }

      // else dislike it
      $user = User::findorFail(auth()->user()->id);
      $group->members()->detach($user);

      return response([
          'message' => 'successfully left'
      ], 200);


    }




























}
