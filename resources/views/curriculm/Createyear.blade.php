@extends('layouts.app')

@section('content')

          <div class="container">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Year</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Year</li>
                    <li class="breadcrumb-item active">Add Year</li>
                  </ol>
                </div>

              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header pb-0">
                      <h5>Year</h5>
                    </div>
                    <div class="card-body add-post">
                      @if (isset($year1))
                                <form action="{{ route('curriculm2.update', $year1[0]->id) }}" method="POST">

                                        @method('PUT')
                                    @else
                                        <form class="row needs-validation" action="{{ route('curriculm2.store') }}"
                                            novalidate="" method="POST">
                                @endif
                                @csrf
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="validationCustom01">Year in Word:</label>
                            <input class="form-control" id="validationCustom01" name="name" type="text" value=" {{ old('name', isset($year1) ? $year1[0]->name : '') }}"  placeholder="semester ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">year in number:</label>
                            <input class="form-control" id="validationCustom01" name="yearInNum" type="text"  value=" {{ old('yearInNum', isset($year1) ? $year1[0]->yearInNum : '') }}" placeholder="semester ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                        <input type="hidden" name="type" value="year1">
                        <input type="hidden" name="id" value="{{isset($year1) ? $year1[0]->id:'' }}">
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
            <!-- Container-fluid Ends-->
          </div>

        <!-- footer start-->

      </div>
    </div>


@endsection
