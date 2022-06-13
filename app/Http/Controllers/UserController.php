<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpKernel\Profiler\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users=User::all();
          return view('private.users')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles=Role::all();
        return view('private.user_create')->with('roles',$roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role'=>['required']
        ]);

         $user=User::Create([
          'name'=>$data['name'],
          'email'=>$data['email'],
          'password'=>Hash::make($data['password'])

         ]);
         $user->assignRole($request->role);

        return redirect()->back()->with('success', 'successfuly banned');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function ban_uban( $id){
        $user=User::findorFail($id);

          if($user->status==0){
              $user->update(['status'=>1]);
              return redirect()->back()->with('success', 'successfuly unbanned');
          }
          elseif($user->status==1){
            $user->update(['status'=>0]);
            return redirect()->back()->with('success', 'successfuly banned');
        }
        dd($id);

    }

    public function update_profile( Request $request){
        $validator = Validator::make($request->all(), [

            'profile'=>'nullable|image|mimes:jpg,bmp,png'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message'=>'Validations fails',
                'errors'=>$validator->errors()
            ],422);
        }

        $user = Auth::user();
        //    dd($request['profile']);
        if($request->hasFile('profile')){
            if($user->profile_photo){
                $old_path=public_path().'/uploads/profile_images/'.$user->profile_photo;
                if(File::exists($old_path)){
                    File::delete($old_path);
                }
            }

            $image_name='profile-image-'.time().'.'.$request->profile->extension();
            $request->profile->move(public_path('/uploads/profile_images/'),$image_name);
        }else{
            $image_name=$user->profile_photo;
        }


        $user->profile_photo=$image_name;
        $user->save();


  return redirect()->back()->with('success',"profile updated");

    }


}
