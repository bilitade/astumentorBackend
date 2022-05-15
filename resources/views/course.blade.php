@extends('layouts.app')

@section('content')

<div class="container m-auto">
    <div style="margin-top: 15vh" class="row justify-content-center">

    @if (!empty($course))


    <div class="card w-75">

        <div class="card-title">
           <h1> Course Code:  {{$course->courseCode}}</h1>

        </div>

        <div class="card-body p-4 m-2">
            <h1>Description:</h1>
            <p> {{$course->description}}</p>

        </div>


    </div>
    @endif









    </div>
</div>










@endsection
