@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3> post Schedule</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">Schedule</li>
                        <li class="breadcrumb-item active">Post</li>
                    </ol>
                </div>

            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Fill the form</h5>
                        </div>
                        <div class="card-body add-post">

                            <form class="row needs-validation" action="{{ route('schedule.store') }}" novalidate=""
                                method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="validationCustom01">Title:</label>
                                        <input class="form-control" id="validationCustom01" name="title" type="text"

                                            placeholder="Title ...." required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom01">Select Type:</label>
                                        <select class="form-control" id="validationCustom01" name="type"
                                            placeholder="Department ....">
                                            <option value="class">Class Schedule</option>
                                            <option value="exam">Exam Schedule</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom01">File <i><small> (image, docx..)</small></i></label>
                                        <input class="form-control" id="validationCustom01" name="file" type="file"
                                            required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="checkbox p-0">
@foreach ($year as $yea)
<div>
    <input class="form-check-input" id="{{ $yea->id }}"
    type="checkbox" name="recipients[]" value="{{ $yea->id }}">
                <label class="form-check-label"
                    for="{{ $yea->id }}">{{ $yea->name }}</label>
            </div>
@endforeach
                                        @empty(!$school)

                                        @foreach ($school as $item)
                                        @empty(!$item->departments)
                                        @foreach ($item->departments as $department)
                                        <div>
                                            <input class="form-check-input" id="{{ $department->id }}"
                                            type="checkbox" name="recipients[]" value="{{ $department->id }}">
                                                        <label class="form-check-label"
                                                            for="{{ $department->id }}">{{ $department->name }}</label>
                                                    </div>
                                                @endforeach
                                                @else
                                            @endempty
                                        @endforeach
                                        @endempty
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <div class="btn-showcase">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                        <input class="btn btn-light" type="reset" value="Discard">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
    </div>


    </div>
    </div>

@endsection
