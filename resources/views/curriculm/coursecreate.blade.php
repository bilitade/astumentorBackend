@extends('layouts.app')

@section('content')

          <div class="container w-75 m-auto">
             @include('private.flash_message')
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Course</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Course</li>
                    <li class="breadcrumb-item active">Add Course</li>
                  </ol>
                </div>

              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">


                    <div class="card-body add-post">
                        @if (isset($course))
                        <form action="{{ route('curriculm2.update', $course[0]->id) }}" method="POST">

                          @method('PUT')
                      @else
                          <form class="row needs-validation" action="{{ route('curriculm2.store') }}"
                              novalidate="" method="POST">
                  @endif

                  @csrf

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="validationCustom01">Course Code:</label>
                            <input class="form-control" id="validationCustom01" name="courseCode" value=" {{ old('courseCode', isset($course) ? $course[0]->courseCode : '') }}"  type="text" placeholder="Enter Course Code" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">courseName:</label>
                            <input class="form-control" id="validationCustom01" name="courseName" value=" {{ old('courseName', isset($course) ? $course[0]->courseName : '') }}"  type="text" placeholder="Enter Course Name" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Credit Hour:</label>
                            <input class="form-control" id="validationCustom01" name="creditHour" value="{{ old('creditHour', isset($course) ? $course[0]->creditHour : '') }}" type="number" placeholder="Enter Credit Hour" required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Description:</label>
                            <textarea class="form-control ckeditor" id="validationCustom01"  value="" name="description">{{ old('description', isset($course) ? $course[0]->description : '') }}</textarea>
                            <div class="valid-feedback">Looks good!</div>
                          </div>

                          @if (!empty($course))
                          <div class="form-group">
                              <label class="d-block">Type</label>
                              <select name="type_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                @foreach ($type as $item)
                                  <option value="{{ $item->id }}" {{ ($item->id == $course[0]->type_id) ? 'selected' : '' }}> {{ $item->name }} </option>
                                @endforeach

                              </select>
                            </div>

                            @else
                            <div class="form-group">
                              <label class="d-block">Type</label>
                              <select name="type_id" class=" form-control js-example-placeholder-multiple col-sm-12" >

                                @foreach ($type as $item)
                                  <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                              </select>
                            </div>
                            @endif

{{--
                          <div class="form-group">
                            <label class="d-block">Type:</label>
                            <select name="type_id" class="form-control js-example-placeholder-multiple col-sm-12" >
                              @foreach ($type as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach






                            </select>
                          </div> --}}

                          @if (!empty($course))
                          <div class="form-group">
                              <label class="d-block">Department:</label>
                              <select name="department_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                <option value="" >none</option>
                                @foreach ($department as $item)
                                  <option value="{{ $item->id }}" {{ ($item->id == $course[0]->department_id) ? 'selected' : '' }}> {{ $item->name }} </option>
                                @endforeach

                              </select>
                            </div>

                            @else
                            <div class="form-group">
                              <label class="d-block">Department:</label>
                              <select name="department_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                <option value="">none</option>
                                @foreach ($department as $item)
                                  <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                              </select>
                            </div>
                            @endif




                          {{-- <div class="form-group">
                            <label class="d-block">Department:</label>
                            <select name="department_id" class="form-control js-example-placeholder-multiple col-sm-12" >
                                <option value="">none</option>
                              @foreach ($department as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>

                              @endforeach

                            </select>
                          </div> --}}

                          @if (!empty($course))
                          <div class="form-group">
                              <label class="d-block">Year:</label>
                              <select name="year_id" class=" form-control js-example-placeholder-multiple col-sm-12" >

                                @foreach ($year as $item)
                                  <option value="{{ $item->id }}" {{ ($item->id == $course[0]->year_id) ? 'selected' : '' }}> {{ $item->name }} </option>
                                @endforeach

                              </select>
                            </div>

                            @else
                            <div class="form-group">
                              <label class="d-block">Year</label>
                              <select name="year_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                
                                @foreach ($year as $item)
                                  <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                              </select>
                            </div>
                            @endif




                          {{-- <div class="form-group">
                            <label class="d-block">year:</label>
                            <select name="year_id" class="form-control   js-example-placeholder-multiple col-sm-12" >
                              @foreach ($year as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>

                              @endforeach

                            </select>
                          </div> --}}


                          @if (!empty($course))
                          <div class="form-group">
                              <label class="d-block">School:</label>
                              <select name="school_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                <option>Select Item</option>
                                @foreach ($school as $item)
                                  <option value="{{ $item->id }}" {{ ($item->id == $course[0]->school_id) ? 'selected' : '' }}> {{ $item->name }} </option>
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






                          {{-- <div class="form-group">
                            <label class="d-block">School:</label>
                            <select name="school_id" class="form-control js-example-placeholder-multiple col-sm-12" >
                              @foreach ($school as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>

                              @endforeach

                            </select>
                          </div> --}}


                          @if (!empty($course))
                          <div class="form-group">
                              <label class="d-block">Semster</label>
                              <select name="semester_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                <option>Select Item</option>
                                @foreach ($semester as $item)
                                  <option value="{{ $item->id }}" {{ ($item->id == $course[0]->semester_id) ? 'selected' : '' }}> {{ $item->name }} </option>
                                @endforeach

                              </select>
                            </div>

                            @else
                            <div class="form-group">
                              <label class="d-block">Semester:</label>
                              <select name="semester_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                @foreach ($semester as $item)
                                  <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                              </select>
                            </div>
                            @endif







                          {{-- <div class="form-group">
                            <label class="d-block">semester:</label>
                            <select name="semester_id" class="form-control  js-example-placeholder-multiple col-sm-12" >
                              @foreach ($semester as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>

                              @endforeach

                            </select>
                          </div> --}}


                          @if (!empty($course))
                          <div class="form-group">
                              <label class="d-block">Resource</label>
                              <select name="resource_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                <option value="" >none</option>
                                @foreach ($resource as $item)
                                  <option value="{{ $item->id }}" {{ ($item->id == $course[0]->resource_id) ? 'selected' : '' }}> {{ $item->name }} </option>
                                @endforeach

                              </select>
                            </div>

                            @else
                            <div class="form-group">
                              <label class="d-block">Resource:</label>
                              <select name="resource_id" class=" form-control js-example-placeholder-multiple col-sm-12" >
                                <option value="">none</option>
                                @foreach ($resource as $item)
                                  <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                              </select>
                            </div>
                            @endif

{{--
                          <div class="form-group">
                            <label class="d-block">resource:</label>
                            <select name="resource_id" class="form-control js-example-placeholder-multiple col-sm-12 " >
                                <option value="">none</option>
                              @foreach ($resource as $item)
                              <option value="{{ $item->id }}">{{ $item->title }}</option>

                              @endforeach

                            </select>
                          </div> --}}

                        </div>

                        <input type="hidden" name="id" value="{{isset($course) ? $course[0]->id:'' }}">


                        <input type="hidden" name="type" value="course">
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
