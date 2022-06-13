@extends('public.app')

@section('contents')

<div class="container m-auto">
    <div style="" class="row justify-content-center">
        @include('private.flash_message')

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
                        <form action="{{route('uploadcourseFile', $course->id)}}" class="d-inline-flex" action="#" method="POST" enctype="multipart/form-data" name="myForm">
                           @csrf
                            <label for=""> <span>  <input type="file" class="form-control" name="file" id=""></span></label>
                           <button  type="submit" class="btn btn-outline-primary ms-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>Upload  </button>
                        </form>

                      </div>
                    </div>
                  </div>




                  <div class="card-body file-manager w-100">
                    <h4>Course Resources</h4>

                     @if (!empty($course->resources))


                    <ul class="files">

                       @foreach ($course->resources as $item)
                       <li  style="min-height:100%; " class="file-box h-100">

                        <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i>
                            <div class=" dropdown-basic rounded">
                                <div class="dropdown">
                                    <div class="btn-group mb-0">
                                        <a class="dropbtn pull-right"
                                            data-bs-original-title="" > <span> <i
                                                    data-feather="more-vertical"></i></span></a>
                                        <div class="dropdown-content">
                                         <form action="{{route('deleteCoureFile', $item->id)}}" method="post">
                                            @csrf
                                            <button class="btn ">Delete <i class="fa fa-trash text-danger"></i></button>

                                         </form>



                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="file-bottom">
                          <h6>{{$item->name}} </h6>
                          <p class="mb-1">{{$item->size}}</p>
                          <h6> <i class=" fa fa-cloud-upload"></i> Teacher</h6>
                           <form action="{{route('downloadCoureFile',$item->location)}}" method="post">
                            @csrf
                              <button class="btn btn-success" type="submit">Download</button>
                           </form>
                        </div>
                      </li>
                       @endforeach


                    </ul>
                    @endif

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
