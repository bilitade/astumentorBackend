@extends('layouts.app')

@section('content')
  <div class="container">

            <!-- Container-fluid starts-->
            <div class="container">


              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header pb-0">
                      <h5>Department</h5>
                      @include('private.flash_message')
                    </div>
                    <div class="card-body add-post">
                      @if (isset($department))
                      <form action="{{ route('curriculm2.update', $department[0]->id) }}" method="POST">
                        @method('PUT')
                    @else
                        <form class="row needs-validation" action="{{ route('curriculm2.store') }}"
                            novalidate="" method="POST">
                @endif

                @csrf

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="validationCustom01">Name:</label>
                            <input class="form-control" id="validationCustom01" name="name" type="text"  value=" {{ old('name', isset($department) ? $department[0]->name : '') }}" placeholder="Department ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Title:</label>
                            <input class="form-control" id="validationCustom01" name="title" type="text"  value=" {{ old('title', isset($department) ? $department[0]->title : '') }}" placeholder="Department ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Description:</label>
                            <textarea class="form-control ckeditor" id="validationCustom01" name="description"   placeholder="Department ...." required=""> {{ old('description', isset($department) ? $department[0]->description : '') }}</textarea>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">objective:</label>
                            <textarea class="form-control ckeditor" id="validationCustom01" name="objective"  placeholder="Department ...." required=""> {{ old('objective', isset($department) ? $department[0]->objective : '') }}</textarea>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                        </div>

                        @if (!empty($department))
                        <div class="form-group">
                            <label class="d-block">School:</label>
                            <select name="school_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                              <option>Select Item</option>
                              @foreach ($school as $item)
                                <option value="{{ $item->id }}" {{ ($item->id == $department[0]->school_id) ? 'selected' : '' }}> {{ $item->name }} </option>
                              @endforeach

                            </select>
                          </div>

                          @else
                          <div class="form-group">
                            <label class="d-block">School:</label>
                            <select name="school_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                              <option>Select School</option>
                              @foreach ($school as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                              @endforeach
                            </select>
                          </div>
                          @endif

                          <div class="form-group">
                            <label for="validationCustom01">Assign manager:</label>
                            <select class="form-control" id="validationCustom01" name="admin_id"   placeholder="school ...." required="">
                                @foreach ($user as $item)

                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>


                        <input type="hidden" name="id" value="{{isset($school) ? $school[0]->id:'' }}">

                        <input type="hidden" name="type" value="dep">
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

          </div>







@endsection
