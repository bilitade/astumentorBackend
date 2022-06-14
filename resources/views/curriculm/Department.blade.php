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
                                            <th>Managed By</th>
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
                                                <td>
                                                    @empty($item->user->name)
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
                                                                           Manager of Department</h5>
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
                                                                               name="department_id">
                                                                           <input type="hidden" value="assign_department_manager"
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
                                                       {{ $item->user->name }}
                                                   </td>
                                               @endempty
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
