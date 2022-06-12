@extends('layouts.app')


@section('content')

    <div class="user-profile social-app-profile">
        <div class="row">

            <!--  user profile first-style start-->
            <div class="col-sm-12 box-col-12">
                <div class="card">
                    <div class="social-tab">

                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search......."><span
                                class="input-group-text"> <i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Delete Warning Modal -->
        <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
            aria-hidden="true">
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


                            <div class="col-sm-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                                        <div class="timeline-content">

                                            <div class="social-chat">
                                                 @if (empty($comments))
                                                         <div class="text-center">
                                                             <h4>No comment yet</h4>
                                                         </div>
                                                 @endif
                                                @if (!empty($comments))

                                                    @foreach ($comments as $commentn)
                                                        @if ($commentn->user_id == Auth::user()->id)
                                                            <div class="your-msg">
                                                                <div class="media"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle"
                                                                        alt="" src="{{Avatar::create($commentn->user->name)->toBase64() }}">
                                                                    <div class="media-body"><span
                                                                            class="f-w-600">{{ $commentn->user->name }}
                                                                            <span>
                                                                                {{ $commentn->human_readable_created_at }}
                                                                            </span>

                                                                        </span>

                                                                        <p>{{ $commentn->comment }}</p>


                                                                    </div>

                                                                </div>
                                                            </div>
                                                         @else
                                                            <div class="other-msg">
                                                                <div class="media"><img
                                                                        class="img-50 img-fluid m-r-20 rounded-circle"
                                                                        alt="" src="{{Avatar::create($comment->user->name)->toBase64() }}">
                                                                    <div class="media-body"><span
                                                                            class="f-w-600">{{ $commentn->user->name }}
                                                                            <span>{{ $commentn->human_readable_created_at }}
                                                                            </span></span>
                                                                        <p>{{ $commentn->comment }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach



                                                @endif



                                            </div>
                                            <div class="comments-box">
                                                <form action="{{route('newsfeed.comments.store',$postId)}}" method="post">
                                                    @csrf

                                                    <div class="media"><img
                                                        class="img-50 img-fluid m-r-20 rounded-circle" alt=""
                                                        src="{{Avatar::create(Auth::user()->name)->toBase64() }}">
                                                    <div class="media-body">
                                                        <div class="input-group text-box">
                                                            <input class="form-control input-txt-bx" type="text"
                                                                name="comment" placeholder="Post Your commnets">
                                                            <button type="submit" class="input-group-text"><i data-feather="send"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>

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
