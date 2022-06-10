<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curriculum\Course;
use App\Models\curriculum\Department;
use App\Models\curriculum\School;
use App\Models\curriculum\Type;
use App\Models\curriculum\Semester;
use App\Models\curriculum\Resource;
use App\Models\curriculum\Year;

class CurriculumController extends Controller
{
   
    public function index()
    {
       $school = school::all();
        return view("curriculm.createtype", \compact('school'));
    }

   
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
      switch ($request->type) {
        case 'dep': 
        Department::create($request->all());
       return redirect()->back()->withInput();
      
      case 'type':
        Type::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->withInput();
      break;
      case 'semster':
        Semester::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->withInput();
      break;
      case 'course':
        Course::create($request->all());
       
       return redirect()->back()->withInput();
      break;
      case 'resource':
        Resource::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->withInput();
      break;
      case 'year':
        Year::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->withInput();
      break;
      default:
       school::create($request->all());
       return redirect()->back()->withInput();
      }
    }

   
    public function show($id)
    {
       if ($id  == 'resourceCreate'){
        
        return view("curriculm.createresource");
       }
       if ($id  == 'semesterCreate') {
           
        return view("curriculm.createsemester"); 
       }
       if ($id  == 'TypeCreate') {
          
        return view("curriculm.createtype"); 
       }
       if ($id  == 'schoolCreate') {
        $school = school::all();
        return view("curriculm.schoolcreate", \compact('school'));
       }
       if ($id  == 'departmentCreate') {
          $school = school::all();
        return view("curriculm.departmentCreate", \compact('school'));
       }
       if ($id  == 'Createyear') {
        return view("curriculm.Createyear");
       }
       if ($id  == 'Createcourse') {
          $school = school::all();
          $type = Type::all();
          $department = Department::all();
          $year = year::all();
          $semester = semester::all();
          $resource = resource::all();
        return view("curriculm.coursecreate", \compact('school','type','department','year','semester','resource'));
       }


       if ($id  == 'resource') {
        $resource = resource::all();       
        return view("curriculm.resource",\compact('resource'));
       }
       if ($id  == 'year') {
        $years = year::all();       
        return view("curriculm.years",\compact('years'));
       }
       if ($id  == 'semester') {
           
        return view("curriculm.createsemester"); 
       }
       if ($id  == 'Type') {
        $type= Type::all(); 
        return view("curriculm.type",\compact('type')); 
       }
       if ($id  == 'school') {
        $school = school::all();
        return view("curriculm.school", \compact('school'));
       }
       if ($id  == 'department') {
          $Department = department::all();
        return view("curriculm.department", \compact('Department'));
       }
       if ($id  == 'semister') {
          $semister = semester::all();
        return view("curriculm.semster", \compact('semister'));
       }
    }

   



    public function edit($id)
    {
      if (str_contains($id, 'type')) { 
        $words = explode('type', $id);
        $type = Type::where('id',$words[1])->get();
        return view("curriculm.createtype",\compact('type'));         
        }
      if (str_contains($id, 'school')) { 
        $words = explode('school', $id);
        $school = school::where('id',$words[1])->get();
        return view("curriculm.schoolcreate",\compact('school'));         
        }
      if (str_contains($id, 'dep')) { 
        $words = explode('dep', $id);
        $school = school::all();
        $department = department::where('id',$words[1])->get();
        return view("curriculm.departmentcreate",\compact('department','school'));         
        }
      if (str_contains($id, 'semi')) { 
        $words = explode('semi', $id);
        $semester = semester::where('id',$words[1])->get();
        return view("curriculm.createsemester",\compact('semester'));         
        }
      if (str_contains($id, 'res')) { 
        $words = explode('res', $id);
        $resource1 = resource::where('id',$words[1])->get();
        return view("curriculm.createresource",\compact('resource1'));         
        }
      if (str_contains($id, 'yer')) { 
        $words = explode('yer', $id);
        $year1 = year::where('id',$words[1])->get();
        return view("curriculm.createyear",\compact('year1'));         
        }
        
    }

  
    public function update(Request $request, $id)
    {

      switch ($request->type) {
        case 'dep': 
        department::where('id',$request->id)->update(['name'=>$request->name ,'title'=>$request->title, 'description'=>$request->description,'school_id'=>$request->school_id,'objective'=>$request->objective]);
       return redirect()->back()->withInput();
      
      case 'type':
        Type::where('id',$request->id)->update(['name'=>$request->name]);
       return redirect()->back()->withInput();
      break;
      case 'school':
        school::where('id',$request->id)->update(['name'=>$request->name ,'title'=>$request->title, 'description'=>$request->description,'vm'=>$request->vm]);
       return redirect()->back()->withInput();
      break;
      case 'semster':
        Semester::where('id',$request->id)->update(['name'=>$request->name]);
       return redirect()->back()->withInput();
      break;
      case 'course':
        Course::create($request->all());
        dd('hh');
       return redirect()->back()->withInput();
      break;
      case 'resource':
        Resource::where('id',$request->id)->update(['title'=>$request->title]);
       return redirect()->back()->withInput();
      break;
      case 'year1':
        year::where('id',$request->id)->update(['name'=>$request->name,'yearInNum'=>$request->yearInNum]);
       return redirect()->back()->withInput();
      break;
      default:
       school::create($request->all());
       return redirect()->back()->withInput();
      }
        
    }

   
    public function destroy($id)
    {
        //
    }
}
