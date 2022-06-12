<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groups\Group;
use App\Models\groups\Member;
use Auth;
use Illuminate\Support\Facades\Validator;

class Groupcontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $group = Group::all();
        return view('group.index', compact('group'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

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

        return redirect()->back()->withErrors($validator)->withInput();
    }

    public function show($id)
    {
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
        $validator = $request->validate([
            'name' => 'required|unique:groups',
        ]);
       Group::where('id',$id)->update(['name'=> $request->name]);
       return redirect()->back()->withErrors($validator)->withInput();
    }


    public function destroy($id)
    {
        //
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
    //    return redirect()->route('named_route', ['parameterKey' => 'value']);
    }
}
