<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use App\Models\curriculum\school;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ScheduleController extends Controller
{

    public function index()
    {
      return   view('schedule.index');
    }


    public function create()
    {
        $school = school::with('departments')->get();
        return  \view('schedule.create', \compact('school'));
    }


    public function store(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'file' => 'required|file',
        ]);

        if($request->file('file')){
            $file= $request->file('file');
        $fileName = time().''.$file->getClientOriginalName();

        $file->storeAs('schedule', $fileName);
        }
        $schedule = new schedule();
        $schedule->title = $request->title;
        $schedule->type = $request->type;
        $schedule->file = $fileName;
        if($request->user_id){
            $schedule->user_id = $request->user_id;
        }
        $schedule->save();
        
        return redirect()->back()->withErrors($validator)->withInput();

    }


    public function show(schedule $schedule)
    {
        //
    }


    public function edit(schedule $schedule)
    {
        //
    }


    public function update(Request $request, schedule $schedule)
    {
        //
    }


    public function destroy(schedule $schedule)
    {
        //
    }
}
