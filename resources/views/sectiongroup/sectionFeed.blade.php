@extends('layouts.app')


@section('content')

<div class="user-profile social-app-profile">
    <div class="row">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="social-tab">

                    <div class="media p-2">
                        <img  style="max-width: 15%" class="  rounded-circle" src=" {{ Avatar::create($group->sectionNmae)->toBase64() }}"  alt="">

                        <div class="media-body p-2">
                          <div class="about">
                            <div class="name">  <h4 class="media-heading">

                                 <h1 style="text-transform: capitalize;" class="text-center"> {{$group->name}}</h1>
                                 <hr>

                                 <h6 class="text-center"> Section Name:{{ $group->sectionNmae }}</h6>
                                                                        <h5 class="text-center">Dept: {{$group->department->name}}</h5>
                                                                        <h5 class="text-center">School: {{$group->school->name}}</h5>
                                                                        <h5 class="text-center">Year {{$group->year->name}}</h5>

                          </div>
                        </div>
                        <form action="{{route('leave', $group->id)}}">
                            <button class=" btn btn-danger  float-end">Leave Group</button>
                        </form>

                      </div>
                </div>



            </div>
        </div>

    </div>



        <!-- End Delete Modal -->
    <div class="tab-content" id="top-tabContent">
        <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline">
            @include('private.flash_message')
            <div class="row">


                <div class="col-xl-3">
                    <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc4">
                        <div class="row">

                      <div class="card ">
                         <div class="card-header bg-primary">
                         <h3 class="text-center">ClassMates</h3>
                         </div>
                        <div class="card-body">

                          <ul>
                            @foreach ($group->users as $member)

                            <li>
                                <div class="media">
                                    <img
                                        class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                        src="{{ Avatar::create($member->name)->toBase64() }}"
                                        alt="">
                                    <div class="media-body">
                                        <h4>   {{ $member->name }}

                                        </h4>

                                    </div>
                                </div>
                            </li>
                                 <hr>

                            @endforeach

                          </ul>


                        </div>
                      </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc4">
                        <div class="row">

                      {{-- <div class="card ">
                         <div class="card-header ">
                         <h3 class="text-center">Recent post</h3>
                         </div>
                        <div class="card-body">

                          <ul>
                            <ul class="files">

                                @foreach ($schedule as $item)
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
                                   <h6>{{$item->title}} </h6>
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










                        </div>
                      </div> --}}



                      <div class="file-content">
                        <div class="card">
                          <div class="card-header">
                            <div class="media">


                            </div>
                          </div>




                          <div class="card-body file-manager w-100">
                            <h4>Schedule</h4>



                            <ul class="files">
                                @foreach ($schedule as $item)


                           <li style="min-height:100%; " class="file-box h-100">
                                <div class="file-top">  <i class="fa fa-file-text-o txt-info"></i><i class="fa fa-ellipsis-v f-14 ellips"></i>
                                </div>
                                <div class="file-bottom">
                                  <h6>{{$item->title}} </h6>
                                  <p class="mb-1">7.59 MB</p>
                                  <h6> <i class=" fa fa-cloud-upload"></i> Teacher</h6>

                                </div>
                              </li>

                              @endforeach
                            </ul>


                          </div>
                        </div>
                      </div>









                    </div>
                    </div>
                </div>






                </div>
            </div>

        </div>
    </div>


    @stop
