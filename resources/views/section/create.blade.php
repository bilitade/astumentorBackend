@extends('layouts.app')

@section('content')

          <div class="container w-75 m-auto">
             @include('private.flash_message')
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Section</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Section</li>
                    <li class="breadcrumb-item active">Add Section</li>
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
                          <form class="row needs-validation" action="{{ route('section.store') }}"
                              novalidate="" method="POST">
                  @endif

                  @csrf

                        <div class="col-sm-12">

                          @if (!empty($course))
                          <div class="form-group">
                              <label class="d-block">Year:</label>
                              <select name="year_id" class=" form-control js-example-placeholder-multiple col-sm-12" >

                                @foreach ($year as $item)
                                  <option value="{{ $item->id }}" > {{ $item->name }} </option>
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

                            <div class="form-group">
                              <label class="d-block">Number of Section</label>
                              <input name="number" class=" form-control " type="number">
                            </div>
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
