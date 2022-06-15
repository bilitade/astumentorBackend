<?php

namespace App\Http\Controllers;

use App\Models\section\section;
use App\Models\section\section_user;
use Illuminate\Http\Request;
use App\Models\curriculum\Semester;
use App\Models\curriculum\Year;
use App\Models\curriculum\School;
use App\Models\curriculum\Department;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function showgroup($id){

        $section=section::find($id);
        $schedule = $section->schedule()->get();

          return view('sectiongroup.sectionFeed')->with(['group'=>$section, 'schedule'=>$schedule]);

    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function groups(){
        $group = section::with('users')->get();


// dd($group);
        return view('sectiongroup.list',\compact('group'));


    }



    public function index()
    {
        $section = section::with('department','year','semester','school')->get();
        return view('section.index', \compact('section'));
    }


    public function create()
    {
        $year = Year::all();
        $semester = Semester::all();
       return view('section.create', \compact('year','semester'));
    }






    public function store(Request $request)
    {
        switch ($request->step) {
            case 'department':
                $section = section::where('department_id',$request->dep_id)->with('year')->get();
                return view('section.sectionform', \compact('section'));
                break;
            case 'section':
               section_user::create($request->all());
                return redirect()->back()->withInput();
                break;

            default:

                break;
        }

        $validator = $request->validate([
            'year_id' => 'required',
            'semester_id' => 'required',
            'number' => 'required|numeric',
        ]);
       $department_id =Auth::user()->load(['department'])->department->id;
       $school_id = Department::where('id', $department_id)->get('school_id');
      $school_id = $school_id[0]->school_id;
        for ($i=1; $i <= $request->number; $i++) {

            section::create($request->all() + ['sectionNmae'=>'section_'.$i,'year_id'=>$request->year_id, 'semester_id'=> $request->semester_id,'department_id' => $department_id,'school_id'=>$school_id,]);
        }
        return redirect()->back()->withInput();
    }





    public function show($section)
    {
        if ($section == 'join') {
            $school = School::with('departments')->get();
            return view('section.schoolform',\compact('school'));
        }
    }


    public function edit(section $section)
    {
        //
    }


    public function update(Request $request, section $section)
    {
        //
    }


    public function destroy(section $section)
    {
        //
    }
}
