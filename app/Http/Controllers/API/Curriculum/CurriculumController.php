<?php

namespace App\Http\Controllers\API\Curriculum;

use App\Http\Controllers\Controller;
use App\Models\curriculum\Course;
use App\Models\curriculum\Department;
use App\Models\curriculum\Resource;
use App\Models\curriculum\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CurriculumController extends Controller
{




 public function schools(){

    $schools=School::all();

    // dd($schools);
    return view('public.curriculum')->with('schools', $schools);
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



        return view('public.school')->with(['school'=>$school, 'depts'=>$depts, 'grouped'=>$grouped]);

    }

    public function  departmentCourse($id)
    {

           $department=Department::find($id);
          $courses= Course::where('department_id','=',$id)->get();
          $grouped=$courses->groupby([
            'year_id',
            'semester_id'
        ])->all();






        return view('public.department')->with(['department'=>$department, 'grouped'=>$grouped]);
    }


 public function  courses( Request $request){

    if($request->filled('search')){
        $courses = Course::search($request->search)->get();
    }else{
        $courses = Course::get();
    }

    return view('public.courses', compact('courses'));




 }



public function course($id){


$course=Course::find($id);

$course->resources;

return view('public.course')->with('course',$course);



}

public function fileUpload(Request $request, $id){
    $request->validate([
        'file' => 'required|mimes:pdf,csv,xls,xlsx,doc,docx',
    ]);




   // $image_name='profile-image-'.time().'.'.$request->profile_photo->extension();
       $name = $request->file('file')->getClientOriginalName();
       $size = $request->file('file')->getSize();
       $extension= $request->file('file')->extension();
       $storename=time().'.'.$extension;
       $humanreaddSize=$this->convertUploadedFileToHumanReadable($size);
        $request->file->move(public_path('/resources/file/'),$storename);


//    dd($humanreaddSize);
        $user = Resource::create([
            'name' => $name,
            'location' => $storename,
            'size'=>$humanreaddSize,
            'user_id'=>Auth::user()->id,
            'course_id'=>$id,
        ]);




       return redirect()->back()->with('Sucess', 'File Has been uploaded successfully  to the course');










    //
}

public function convertUploadedFileToHumanReadable($size, $precision = 2)
{
    if ( $size > 0 ) {
        $size = (int) $size;
        $base = log($size) / log(1024);
        $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');
        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
    }

    return $size;
}

public function downloadFile( $name){
    //    dd($name);

       $filepath = public_path('/resources/file/').$name;
     return Response()->download($filepath);

}
public function deleteFile($id){
      $resource=Resource::findOrFail($id);
      $old_path=public_path().'/resources/file/'.$resource->location;
      if(File::exists($old_path)){
         File::delete($old_path);
      }

         $resource->delete();
         return redirect()->back()->with('Success', 'File Has been deleted successfully  ');


}






}
