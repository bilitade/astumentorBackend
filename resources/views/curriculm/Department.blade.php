@extends('layouts.app')


@section('content')

        <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <h3>Department Tables</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Departments</li>

                        </ol>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>

        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid m-4 p-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Department</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>School</th>
                                            <th>title</th>
                                            <th>objective</th>
                                            <th>description</th>
                                            <th>Action</th>
                                            <th> date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Department as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->school->name }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{!! $item->objective !!}</td>
                                                <td>{!!$item->description !!}</td>
                                                <td><a class="btn btn-primary m-2 pull-left"
                                                    href="/curriculm2/dep{{$item->id}}/edit">Edit</a></td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- DOM / jQuery  Ends-->
            @endsection
