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
                            <th>Managed By</th>
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
                            <td> @empty($item->user->name)
                                <P>Not Assigned</P>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                        data-original-title="test"
                                                        data-bs-target="#exampleModal">Assign</button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Assign
                                                                        Manager of School</h5>
                                                                    <button class="btn-close" type="button"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form class="row needs-validation"
                                                                        action="{{ route('curriculm2.store') }}" novalidate=""
                                                                        method="POST">

                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label for="validationCustom01">Slect User:</label>
                                                                            <select class="form-control"
                                                                                id="validationCustom01" name="admin_id"
                                                                                placeholder="school ...." required="">
                                                                                @foreach ($user as $use)
                                                                                    <option value="{{ $use->id }}">
                                                                                        {{ $use->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <div class="valid-feedback">Looks good!</div>
                                                                        </div>
                                                                        <input type="hidden" value="{{ $item->id }}"
                                                                            name="school_id">
                                                                        <input type="hidden" value="assign_school_manager"
                                                                            name="type">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-primary" type="button"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button class="btn btn-secondary" type="submit">Save
                                                                        </button>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                @else
                                {{ $item->user->name  }}</td>
                         @endempty


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

