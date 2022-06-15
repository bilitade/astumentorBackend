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
use App\Models\User;

class CurriculumController extends Controller
{
  public function __construct()
  {
           $this->middleware('verified');
  }


    public function index()
    {
       $school = School::all();
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
       return redirect()->back()->with('success', 'department added');

      case 'type':
        Type::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->with('success', 'Course Type added');
      break;
      case 'semster':
        Semester::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->with('success', 'semster added');
      break;
      case 'course':
        Course::create($request->all());

       return redirect()->back()->with('success', 'Course added');
      break;
      case 'resource':
        Resource::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->with('success', ' added');
      case 'year':
        Year::create($request->all()+ ['id' => $request->name]);
       return redirect()->back()->withInput();
      break;
      case 'assign_department_manager':
        Department::where('id', $request->department_id)->update(['admin_id'=>$request->admin_id]);
       return redirect()->back()->withInput();
      break;
      case 'assign_school_manager':

        School::where('id', $request->school_id)->update(['admin_id'=>$request->admin_id]);
       return redirect()->back()->withInput();
      break;
      default:
       School::create($request->all());
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
        $user =  User::role('school')->get();
        return view("curriculm.schoolcreate", compact('user'));
       }
       if ($id  == 'departmentCreate') {
        $user =  User::role('department')->get();
          $school = School::all();
        return view("curriculm.departmentCreate", \compact('school','user'));
       }
       if ($id  == 'Createyear') {
        return view("curriculm.Createyear");
       }
       if ($id  == 'Createcourse') {
          $school = School::all();
          $type = Type::all();
          $department = Department::all();
          $year = year::all();
          $semester = Semester::all();
          $resource = Resource::all();
        return view("curriculm.coursecreate", \compact('school','type','department','year','semester','resource'));
       }


       if ($id  == 'resource') {
        $resource = Resource::all();
        return view("curriculm.resource",\compact('resource'));
       }
       if ($id  == 'year') {
        $years = Year::all();
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
        $user =  User::role('school')->get();;
        $school = School::all();
        return view("curriculm.school", \compact('school','user'));
       }
       if ($id  == 'department') {
        $user =  User::role('Department')->get();;
          $Department = Department::all();
        return view("curriculm.department", \compact('Department','user'));
       }
       if ($id  == 'semister') {
          $semister = Semester::all();
        return view("curriculm.semster", \compact('semister'));
       }
       if ($id  == 'allcourse') {
        $courses = Course::all();
      return view("curriculm.courseslist", \compact('courses'));
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
        $school = School::where('id',$words[1])->get();
        return view("curriculm.schoolcreate",\compact('school'));
        }
      if (str_contains($id, 'dep')) {
        $words = explode('dep', $id);
        $school = School::all();
        $department = Department::where('id',$words[1])->get();

        return view("curriculm.departmentcreate", \compact('department','school'));
        }
      if (str_contains($id, 'semi')) {
        $words = explode('semi', $id);
        $semester = Semester::where('id',$words[1])->get();
        return view("curriculm.createsemester",\compact('semester'));
        }
      if (str_contains($id, 'res')) {
        $words = explode('res', $id);
        $resource1 = Resource::where('id',$words[1])->get();
        return view("curriculm.createresource",\compact('resource1'));
        }
      if (str_contains($id, 'yer')) {
        $words = explode('yer', $id);
        $year1 = Year::where('id',$words[1])->get();
        return view("curriculm.createyear",\compact('year1'));
        }

        if (str_contains($id, 'course')) {
            $words = explode('course', $id);

            $school = School::all();
            $type = Type::all();
            $department = Department::all();
            $year = Year::all();
            $semester = Semester::all();
            $resource = Resource::all();
            $course = Course::where('id',$words[1])->get();
            return view("curriculm.coursecreate",\compact('school','type','department','year','semester','resource','course'));
            }


    }


    public function update(Request $request, $id)
    {

      switch ($request->type) {
        case 'dep':
        Department::where('id',$request->id)->update(['name'=>$request->name ,'title'=>$request->title,
        'description'=>$request->description,'school_id'=>$request->school_id,
        'objective'=>$request->objective]);
       return redirect()->back()->withInput();

      case 'type':
        Type::where('id',$request->id)->update(['name'=>$request->name]);
       return redirect()->back()->withInput();
      break;
      case 'school':
        School::where('id',$request->id)->update(['name'=>$request->name ,'title'=>$request->title, 'description'=>$request->description,'vm'=>$request->vm]);
       return redirect()->back()->withInput();
      break;
      case 'semster':
        Semester::where('id',$request->id)->update(['name'=>$request->name]);
       return redirect()->back()->withInput();
      break;
      case 'course':
        $request->validate([
            'courseName'=>'required' ,
            'courseCode'=>'required',
            'description' => 'required',

        ]);
        Course::where('id',$request->id)->update([
            'courseName'=>$request->courseName ,
            'courseCode'=>$request->courseCode,
            'creditHour'=>$request->creditHour,
            'description'=>$request->description,
            'department_id'=>$request->department_id,
            'semester_id'=>$request->semester_id,
            'year_id'=>$request->year_id,
            'type_id'=>$request->type_id]);

       return redirect()->back()->with('success', 'successfully updated');
      break;
      case 'resource':
        Resource::where('id',$request->id)->update(['title'=>$request->title]);
       return redirect()->back()->withInput();
      break;
      case 'year1':
        Year::where('id',$request->id)->update(['name'=>$request->name,'yearInNum'=>$request->yearInNum]);
       return redirect()->back()->withInput();
      break;
      default:
       School::create($request->all());
       return redirect()->back()->withInput();
      }

    }


    public function destroy($id)
    {
        //
    }
}
