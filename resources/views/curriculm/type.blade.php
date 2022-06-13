@extends('layouts.app')

@section('content')
        <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <h3>Course Type Tables</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Course Type</li>

                    </div>


                    </div>
                </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container">
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
                                            <th>Action</th>
                                            <th> date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($type as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td><a class="btn btn-primary m-2 pull-left"
                                                    href="/curriculm2/type{{$item->id}}/edit">Edit</a></td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DOM / jQuery  Ends-->
            @endsection

