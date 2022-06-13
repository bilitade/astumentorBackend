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
    <!-- footer start-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 footer-copyright">
                    <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/email-app.js"></script>
    <script src="../assets/js/form-validation-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    </body>

    </html>
@endsection
