<?php

namespace App\Http\Controllers;

use App\Models\schedule;
use App\Models\sechedule_section;
use App\Models\curriculum\school;
use App\Models\curriculum\year;
use App\Models\section\section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
class ScheduleController extends Controller
{

    public function index()
    {
      return   view('schedule.index');
    }


    public function create()
    {
       $role=  Auth::user()->getRoleNames();
      if ($role[0] == 'Department') {
        $year = year::orderBy('created_at')->get();
          $school = null;
          return  \view('schedule.create', \compact('school','year'));
        }
    elseif ($role[0] == 'school') {
        $school = Auth::user()->load(['school'])->school->id;
        $school = school::where('id', $school)->with('department')->get();
        return  \view('schedule.create', \compact('school'));
    }
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
        $schedule->save();
        if($request->user_id){
            $schedule->user_id = $request->user_id;
        }
        foreach ($request->recipients as $key => $value) {
          $section=  section::where(['department_id' => Auth::user()->load(['department'])->department->id, 'year_id' => $value])->get();
          foreach ($section as $key => $each) {
            sechedule_section::create(['section_id'=> $each->id, 'schedule_id'=> $schedule->id]);
          }

        }

        return redirect()->back()->withErrors($validator)->withInput();

    }


    public function show( $schedule)
    {
        $sche = schedule::with('section')->get();
        dd($sche);
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
