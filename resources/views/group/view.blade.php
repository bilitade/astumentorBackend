@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                  @include('private.flash_message')

                <div class="row">
                    <div class="col-sm-6">
                        <h3>All Groups</h3>

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
                                            <th>Id</th>
                                            <th>Name</th>

                                            <th>Action</th>
                                            <th> date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($group as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->name }}</td>

                                                <td><a class="btn btn-primary m-2 pull-left"
                                                    href="/groups/{{$item->id}}/edit">Edit</a></td>
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
            @section('js')
            <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

            <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
            <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
        @endsection
