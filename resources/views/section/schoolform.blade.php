@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Slect Your Department</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item">School </li>
                        <li class="breadcrumb-item">Department</li>
                        <li class="breadcrumb-item active">Select</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <!-- Bookmark Start-->
                    <div class="bookmark">

                    </div>
                    <!-- Bookmark Ends-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">


                        <div class="card-body add-post">
                                    <form class="row needs-validation" action="{{ route('section.store') }}" novalidate=""
                                        method="POST">

                            @csrf

                            <div class="col-sm-12">



                                <div class="form-group">
                                    <label class="d-block">School</label>
                                    @foreach ($school as $item)
                                        <h5> {{ $item->name }} </h5>
                                        @foreach ($item->departments as $department)
                                            <div class="card-body animate-chk">
                                                <div class="row">

                                                    <label class="d-block" for="edo-ani">
                                                        <input class="radio_animated" id="edo-ani" type="radio"
                                                            name="dep_id" value="{{  $department->id }}" checked=""> {{ $department->name }}
                                                    </label>


                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>



                            </div>

                            <input type="hidden" name="step" value="department">


                            <input type="hidden" name="type" value="course">
                            <div class="btn-showcase">
                                <button class="btn btn-primary" type="submit">Next</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
@endsection
