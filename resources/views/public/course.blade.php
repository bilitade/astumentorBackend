@extends('public.app')

@section('contents')

<div class="container m-auto">
    <div style="" class="row justify-content-center">

    @if (!empty($course))


    <div class="card w-75 p-4 m-4">
        <div class="job-search">
          <div class="card-body">
            <div class="media">
              <div class="media-body pt-4">
                <h3 class=" text-center text-primary">   Course Name:  <strong>{{$course->courseName}}   </strong>   </h3>
                 <hr>
                <h5 class="float-start">Course Code:  {{$course->courseCode}}</h5>
                <h5 class="float-end">Course Type:  {{$course->type_id}}</h5>

              </div>
            </div>
            <div class="job-description">
              <h6>Course Description</h6>
              <p> {{$course->description}}</p>
              <!-- <p>Front-end web designers combine design, programming, writing and organizational skills in their work. They help shape the vision for a company's online content.</p>-->
            </div>
            <div class="file-content">
                <div class="card">
                  <div class="card-header">
                    <div class="media">

                      <div class="media-body text-end">
                        <form class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                           <label for=""> <span>  <input type="file" class="form-control" name="file" id=""></span></label>

                        </form>
                        <button  type="submit" class="btn btn-outline-primary ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>Upload  </button>
                      </div>
                    </div>
                  </div>




                  <div class="card-body file-manager">
                    <h4>Course Resources</h4>
                    <ul class="files">
                      <li class="file-box">
                        <div class="file-top">  <i class="fa fa-file-image-o txt-primary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                        <div class="file-bottom">
                          <h6>Logo.psd </h6>
                          <p class="mb-1">2.0 MB</p>
                          <p> <b>last open : </b>1 hour ago</p>
                        </div>
                      </li>
                      <li class="file-box">
                        <div class="file-top">  <i class="fa fa-file-archive-o txt-secondary"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                        <div class="file-bottom">
                          <h6>Project.zip </h6>
                          <p class="mb-1">1.90 GB</p>
                          <p> <b>last open : </b>1 hour ago</p>
                        </div>
                      </li>
                      <li class="file-box">
                        <div class="file-top">  <i class="fa fa-file-excel-o txt-success"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                        <div class="file-bottom">
                          <h6>Backend.xls</h6>
                          <p class="mb-1">2.00 GB</p>
                          <p> <b>last open : </b>1 hour ago</p>
                        </div>
                      </li>
                      <li class="file-box">
                        <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i></div>
                        <div class="file-bottom">
                          <h6>requirements.txt </h6>
                          <p class="mb-1">0.90 KB</p>
                          <p> <b>last open : </b>1 hour ago</p>
                        </div>
                      </li>
                    </ul>


                    </ul>
                  </div>
                </div>
              </div>




          </div>
        </div>
      </div>








    @endif









    </div>
</div>










@endsection
