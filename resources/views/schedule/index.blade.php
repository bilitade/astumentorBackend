@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">

@section('content')

        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Schedule Tables</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Tables</li>

                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
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

                                            <th>Name</th>
                                             <th>Schedule Type</th>


                                            <th> date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($schedules as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->type }}</td>
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
