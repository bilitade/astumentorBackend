@extends('layouts.app')

@section('content')

          <div class="container">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>School</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">School</li>
                    <li class="breadcrumb-item active">Create School</li>
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
                      <h5>School</h5>
                    </div>
                    <div class="card-body add-post">
                      @if (isset($school))
                      <form action="{{ route('curriculm2.update', $school[0]->id) }}" method="POST">
                        @method('PUT')
                    @else
                        <form class="row needs-validation" action="{{ route('curriculm2.store') }}"
                            novalidate="" method="POST">
                @endif
                @csrf

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="validationCustom01">Name:</label>
                            <input class="form-control" id="validationCustom01" name="name" type="text" value=" {{ old('name', isset($school) ? $school[0]->name : '') }}" placeholder="school ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Title:</label>
                            <input class="form-control" id="validationCustom01" name="title" type="text" value=" {{ old('title', isset($school) ? $school[0]->title : '') }}" placeholder="school ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Assign Manager:</label>
                            <select class="form-control" id="validationCustom01" name="admin_id"   placeholder="school ...." required="">
                                @foreach ($user as $item)

                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Description:</label>
                            <textarea class="form-control ckeditor"   name="description" placeholder="school ...." required=""> {{ old('description', isset($school) ? $school[0]->description : '') }}</textarea>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Vision And Mission:</label>
                            <textarea class="form-control ckeditor"     name="vm"  required > {!! old('vm', isset($school) ? $school[0]->vm : '') !!}</textarea>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                        </div>
                        <input type="hidden" name="type" value="school">
                        <input type="hidden" name="id" value="{{isset($school) ? $school[0]->id:'' }}">

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


    {{-- <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>

    <script src="../assets/js/form-validation-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script> --}}

    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
@endsection
