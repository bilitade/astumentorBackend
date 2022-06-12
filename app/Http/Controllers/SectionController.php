<?php

namespace App\Http\Controllers;

use App\Models\section\section;
use App\Models\section\section_member;
use Illuminate\Http\Request;
use App\Models\curriculum\Semester;
use App\Models\curriculum\Year;
use App\Models\curriculum\school;
use App\Models\curriculum\department;


class SectionController extends Controller
{

    public function index()
    {
        $section = section::with('department','year','semester','school')->get();
        return view('section.index', \compact('section'));
    }


    public function create()
    {
        $year = year::all();
        $semester = semester::all();
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
                section_member::create($request->all());
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

        for ($i=1; $i <= $request->number; $i++) {

            section::create($request->all() + ['sectionNmae'=>'section_'.$i,'year_id'=>$request->year_id, 'semester_id'=> $request->semester_id,'department_id' => 4,'school_id'=>4,]);
        }
        return redirect()->back()->withInput();
    }





    public function show($section)
    {
        if ($section == 'join') {
            $school = school::with('departments')->get();
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
