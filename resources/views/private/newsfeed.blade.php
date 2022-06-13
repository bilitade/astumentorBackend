@extends('layouts.app')


@section('content')

<div class="user-profile social-app-profile">
    <div class="row">


    </div>


    <!-- Delete Warning Modal -->
<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('newsfeed.destroy', 'id') }}" method="post">
                @csrf
                @method('DELETE')
                <input id="id" name="id" hidden>
                <h5 class="text-center">Are you sure you want to delete this post?</h5>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-danger">Yes</button>
            </div>
            </form>
        </div>
    </div>
</div>
        <!-- End Delete Modal -->
    <div class="tab-content" id="top-tabContent">
        <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline">
            @include('private.flash_message')
            <div class="row">


                <div class="col-xl-3 xl-40 col-md-5 box-col-4">
                    <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc4">
                        <div class="row">


                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-60 col-md-7 box-col-8">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="new-users-social">

                                    <div class="timeline-content">

                                    </div>

                                    <form action="{{route('newsfeed.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="comments-box">
                                            <div class="media"><img class="img-50 img-fluid m-r-20 rounded-circle"
                                                    alt=""
                                                    src="{{ (Auth::user()->profile_photo)? asset('uploads/profile_images/'.Auth::user()->profile_photo): Avatar::create(Auth::user()->name)->toBase64() }}">
                                                <div class="media-body">
                                                    <div class="input-group text-box">
                                                        <input class="form-control input-txt-bx" type="text"
                                                            name="body"
                                                            placeholder="Whats on your mind?">
                                                        <div class="input-group-text"> <button
                                                            type="submit"
                                                            class="btn "> <i class=" "
                                                            data-feather="send"></i></button> </div>
                                                    </div>
                                                    <div class="mb-5">
                                                        <label for="formFile" class="form-label pt-4">

                                                            <i data-feather="image"></i>
                                                        </label>
                                                        <input style="display: none" name="image" class="form-control"
                                                            type="file" id="formFile" onchange="preview()">

                                                        <button  onclick="clearImage()" class=" closebtn btn  "> <i
                                                                class="fa fa-trash"></i></button>
                                                    </div>

                                                    <img id="frame" src="" class="img-fluid" />

                                                    <script>
                                                        function preview() {
                                                            frame.src = URL.createObjectURL(event.target.files[0]);
                                                        }

                                                        function clearImage() {
                                                            document.getElementById('formFile').value = null;
                                                            frame.src = "";
                                                        }

                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @if (!empty($posts))
                        @foreach ($posts as $post)
                        <div class="col-sm-12">



                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="new-users-social">
                                        <div class="media"><img class="rounded-circle image-radius m-r-15"
                                                src="{{ ($post->user->profile_photo)? asset('uploads/profile_images/'.$post->user->profile_photo): Avatar::create($post->user->name)->toBase64() }}" alt="">
                                            <div class="media-body">
                                                <h6 class="mb-0 f-w-700">{{$post->user->name}}</h6>
                                                <p>{{$post->human_readable_created_at}}</p>
                                                <hr>

                                            </div>
                                            @if ($post->user_id==Auth::user()->id|| Auth::user()->hasRole('Admin'))
                                            <div class=" dropdown-basic rounded">
                                                <div class="dropdown">
                                                    <div class="btn-group mb-0">
                                                        <button class="dropbtn pull-right" type="button"
                                                            data-bs-original-title="" title="">Action <span> <i
                                                                    data-feather="more-vertical"></i></span></button>
                                                        <div class="dropdown-content">

                                                                {{-- !-- Delete Warning Modal -->  --}}

                                                                 <a href="#"
                                                                     data-id={{$post->id}}
                                                                     class="btn delete"
                                                                     data-bs-toggle="modal"
                                                                     data-bs-target="#deleteModal"> <i class="fa fa-trash"> </i></a>
                                                         <a href="{{ route("newsfeed.edit", $post->id)}}" class=" btn "> <i class="fa fa-edit"></i></a>


                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            @endif
                                        </div>
                                        <script>
                                            $(document).on('click','.delete',function(){
                                                    let id = $(this).attr('data-id');
                                                    console.log(id);
                                                    $('#id').val(id);
                                               });
                                       </script>
                                 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                                        <div class="timeline-content">
                                            <p>
                                                {{$post->body}}
                                            </p>
                                            <img style="  object-fit: cover; width: 100%;" src="{{$post->image_url}}" alt="" srcset="">

                                            <div class="like-content text-lg">
                                                <span class="pull-right p-2">
                                                    <span  class="badge badge-light text-dark" style="font-size: 1rem" >{{$post->comments_count}}  </span>
                                                    <span><a href="{{route('newsfeed.comments',$post->id)}}"><i data-feather="message-circle"> </i></a></span>

                                                </span>

                                                <form action="{{route('likes',['id'=>$post->id])}}" method="POST">
                                                    @csrf
                                                    <span  class="badge badge-light text-dark p-2" style="font-size: 1rem" >{{$post->likes_count}}  </span>
                                                    <span><button class="btn p-2"><i style="font-size: 1.2rem" class=" p-0 m-0 fa fa-heart font-danger"></i></button></span>
                                                </form>

                                                        </div>

                                                        <div class="social-chat">
                                                            @foreach ($post->comments->slice(0,2) as $comment)

                                                               @if ( $comment->user_id==Auth::user()->id)
                                                               <div class="your-msg">
                                                                <div class="media"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{ ($comment->user->profile_photo)? asset('uploads/profile_images/'.$comment->user->profile_photo): Avatar::create($comment->user->name)->toBase64() }} ">


                                                                  <div class="media-body"><span class="f-w-600">{{$comment->user->name }}
                                                                    <span> {{ $comment->human_readable_created_at}}
                                                                </span>


                                                            </span>



                                                                    <p>{{$comment->comment}}</p>


                                                                  </div>

                                                                </div>
                                                              </div>
                                                              @else
                                                              <div class="other-msg">
                                                                <div class="media"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="{{ ($comment->user->profile_photo)? asset('uploads/profile_images/'.$comment->user->profile_photo): Avatar::create($comment->user->name)->toBase64() }}">
                                                                  <div class="media-body"><span class="f-w-600">{{$comment->user->name}} <span>{{ $comment->human_readable_created_at}} </span></span>
                                                                    <p>{{$comment->comment}}</p>
                                                                  </div>
                                                                </div>
                                                              </div>

                                                               @endif


                                                            @endforeach

                                                            <div class="text-center"><a class="f-w-600" href="{{route('newsfeed.comments',$post->id)}}"> show Commmets</a></div>


                                                          </div>
                                        </div>
                                    </div>
                                </div>

                            </div>




                        </div>
                        @endforeach
                        @endif


                    </div>





                </div>
            </div>

        </div>
    </div>


    @stop
