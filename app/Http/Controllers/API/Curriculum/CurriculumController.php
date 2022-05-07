<?php

namespace App\Http\Controllers\API\Curriculum;

use App\Http\Controllers\Controller;
use App\Models\curriculum\Course;
use App\Models\curriculum\Department;
use App\Models\curriculum\School;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{




 public function schools(){

    $schools=School::all();

    // dd($schools);
    return view('curriculum')->with('schools', $schools);
 }





    public function  schoolCourse($id)
    {

           $school=School::find($id);
            $depts=Department::where('school_id','=',$id)->get();

            // dd($depts);
          $courses= Course::where('school_id','=',$id)->whereNull('department_id')->get();
          $grouped=$courses->groupby([
            'year_id',
            'semester_id'
        ])->all();



        // return response()->json([
        //    'school'=>$school,


        // ], 200);



        return view('school')->with(['school'=>$school, 'depts'=>$depts, 'grouped'=>$grouped]);
    }

    public function  departmentCourse($id)
    {

           $department=Department::find($id);
          $courses= Course::where('department_id','=',$id)->get();
          $grouped=$courses->groupby([
            'year_id',
            'semester_id'
        ])->all();



        // return response()->json([
        //    'Department'=>$school,
        //    'courses'=>$grouped,

        // ], 200);


        return view('department')->with(['department'=>$department, 'grouped'=>$grouped]);
    }



    //
}
