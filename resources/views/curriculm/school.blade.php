@extends('layouts.app')

@section('content')

          <div class="container-">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>school Tables</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item">School</li>

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
                <h5>school</h5>
                                    </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>title</th>
                            <th>Vision And Mission</th>
                            <th>description</th>
                            <th>Action</th>
                            <th> date</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($school as $item)

                          <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{!! $item->vm !!}</td>
                            <td>{!!$item->description!!}</td>
                            <td><a class="btn btn-primary m-2 pull-left"
                              href="/curriculm2/school{{$item->id}}/edit">Edit</a></td>
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




     {{-- @section('js')
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script> --}}

