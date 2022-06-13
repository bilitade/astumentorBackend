@extends('layouts.app')

@section('content')

          <div class="container-fluid">
            <div class="page-header">
                @include('private.flash_message')
              <div class="row">
                <div class="col-sm-6">
                  <h3>Group</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Group</li>

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
                      <h5>Group</h5>
                    </div>@if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                    <div class="card-body add-post">
                      @if (isset($group))
                      <form action="{{ route('groups.update', $group->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                    @else
                        <form class="row needs-validation" action="{{ route('groups.store') }}"
                            novalidate="" method="POST" enctype="multipart/form-data">
                @endif
                @csrf

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="validationCustom01">Name:</label>
                            <input class="form-control" id="validationCustom01" name="name" type="text"  value=" {{ old('name', isset($group) ? $group->name : '') }}" placeholder="Department ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                              <label for="validationCustom01">description:</label>
                              <textarea class="form-control" id="validationCustom01" name="description"   placeholder="Department ...." required=""> {{ old('description', isset($group) ? $group->description : '') }}</textarea>
                              <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                              <label for="validationCustom01">Image <i>(optional)</i></label>
                              <input class="form-control" id="validationCustom01" name="image" type="file"  >
                              <div class="valid-feedback">Looks good!</div>
                            </div>


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
        </div>


      </div>
    </div>

@endsection
