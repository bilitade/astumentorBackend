<?php

namespace App\Http\Controllers;

use App\Models\groups\Group;
use App\Models\groups\Member;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $group = Group::all();
        return view('group.view', compact('group'));
    }


    public function create()
    {
       return view('group.create');
    }



    public function store(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required|unique:groups',
            'description' => 'required',

        ]);

        $imageName ="";
        if($request->file('image')){
            $file= $request->file('image');
        $imageName = time().''.$file->getClientOriginalName();

        $file->move(public_path('group/profile'), $imageName);
        }
        $group = new Group();
        $group->name = $request->name;
        $group->description = $request->description;
        $group->image = $imageName;
        $group->save();

        return redirect()->back()->with('success', 'group successfully created');
    }

    public function show($id)
    {
         $group=Group::findorFail($id);
         $posts=Post::where('group_id', $id)->orderBy('id', 'DESC')->get();

        return view('group.show')->with(['group'=>$group, 'posts'=>$posts]);
    }

    public function groups(){
        $group = Group::with('members')->get();


        return view('group.list',\compact('group'));


    }


    public function edit($id)
    {
        $group = Group::findorfail($id);
        return \view('group.create', \compact('group'));

    }

    public function update(Request $request, $id)
    {
        //   dd($request->all());
        $validator = $request->validate([
            'name' => 'required',
        ]);
        $imageName ="";
        if($request->file('image')){
            $file= $request->file('image');
        $imageName = time().''.$file->getClientOriginalName();

        $file->move(public_path('group/profile'), $imageName);
        }

       Group::where('id',$id)->update(['name'=> $request->name, 'image'=>$imageName]);
       return redirect()->back()->with('success', 'group Successfully updated');
    }


    public function leave($id)
    {
          $member=Member::where('user_id', Auth::user()->id)->where('group_id',$id);
          $member->delete();

return  redirect('/allgroups')->with('success', ' Successfully left group');

    }
    public function join($id)
    {
       $x = Member::where(['group_id' => $id,'user_id' =>Auth::user()->id])->exists();
       if (!$x) {

           $join = new Member();
           $join->user_id = Auth::user()->id;
           $join->group_id = $id;
           $join->save();
           return redirect()->back()->withInput();
        }
        return redirect()->back()->with('error', 'you already joined!');

    }
}
