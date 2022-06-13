@extends('layouts.app')

@section('content')

<div class="container m-auto">
    <div style="" class="row justify-content-center">










        <div class="card">
            <div class="card-header pb-0">
                <h5>Courses</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>School</th>
                                <th>Department</th>
                                <th>Semester</th>
                                <th>Year</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{$course->courseCode}}</td>
                                    <td> <a href="{{route('single-course',$course->id)}}">{{$course->courseName}}</a> </td>
                                    <td>{{$course->school->name}}</td>
                                    <td>{{($course->department)?$course->department->name:""}}</td>

                                    <td>{{($course->semester)?$course->semester->name:""}}</td>
                                    <td>{{($course->year)?$course->year->name:""}}</td>

                                    <td><a class="btn btn-primary m-2 pull-left"
                                        href="/curriculm2/course{{$course->id}}/edit">Edit</a></td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
</div>

@endsection
