@extends('layouts.app')

@section('content')
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Course</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item">Course</li>
                    <li class="breadcrumb-item active">Register</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header pb-0">
                      <h5>Course</h5>
                    </div>
                    <div class="card-body add-post">
                      <form class="row needs-validation" action="{{ route('curriculm2.store') }}" novalidate="" method="POST">
                        @csrf
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="validationCustom01">courseCode:</label>
                            <input class="form-control" id="validationCustom01" name="courseCode" type="text" placeholder="Course ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">courseName:</label>
                            <input class="form-control" id="validationCustom01" name="courseName" type="text" placeholder="Course ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">creditHour:</label>
                            <input class="form-control" id="validationCustom01" name="creditHour" type="number" placeholder="Course ...." required="">
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label for="validationCustom01">Description:</label>
                            <textarea class="form-control" id="validationCustom01" name="description" placeholder="Course ...." required=""> </textarea>
                            <div class="valid-feedback">Looks good!</div>
                          </div>
                          <div class="form-group">
                            <label class="d-block">Type:</label>
                            <select name="type_id" class="js-example-placeholder-multiple col-sm-12" >
                              @foreach ($type as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                                  
                              @endforeach
                              
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="d-block">department:</label>
                            <select name="department_id" class="js-example-placeholder-multiple col-sm-12" >
                              @foreach ($department as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                                  
                              @endforeach
                              
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="d-block">year:</label>
                            <select name="year_id" class="js-example-placeholder-multiple col-sm-12" >
                              @foreach ($year as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                                  
                              @endforeach
                              
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="d-block">School:</label>
                            <select name="school_id" class="js-example-placeholder-multiple col-sm-12" >
                              @foreach ($school as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                                  
                              @endforeach
                              
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="d-block">semester:</label>
                            <select name="semester_id" class="js-example-placeholder-multiple col-sm-12" >
                              @foreach ($semester as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                                  
                              @endforeach
                              
                            </select>
                          </div>
                          <div class="form-group">
                            <label class="d-block">resource:</label>
                            <select name="resource_id" class="js-example-placeholder-multiple col-sm-12" >
                              @foreach ($resource as $item)
                              <option value="{{ $item->id }}">{{ $item->title }}</option>
                                  
                              @endforeach
                              
                            </select>
                          </div>
                         
                        </div>
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
            <!-- Container-fluid Ends-->
          </div>
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright 2021-22 © viho All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/popper.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="../assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
    <script src="../assets/js/email-app.js"></script>
    <script src="../assets/js/form-validation-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
@endsection
