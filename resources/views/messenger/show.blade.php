@extends('layouts.app')

@section('content')



<div class="col call-chat-body">
    <div class="card">
      <div class="card-body p-0">
        <div class="row chat-box">
          <!-- Chat right side start-->
          <div class="col chat-right-aside">
            <!-- chat start-->
            <div class="chat">
              <!-- chat-header start-->
              <div class="media chat-header clearfix"><img class="rounded-circle" src="../assets/images/user/8.jpg" alt="">
                <div class="media-body">
                  <div class="about">
                    <div class="name">{{ $thread->subject }}  </div>

                  </div>
                </div>

              </div>
              <!-- chat-header end-->
              <div class="chat-history chat-msg-box custom-scrollbar">
                <ul>
                    @each('messenger.partials.messages', $thread->messages, 'message')

                    @include('messenger.partials.form-message')


                </ul>
              </div>
              <!-- end chat-history-->

              <!-- end chat-message-->
              <!-- chat end-->
              <!-- Chat right side ends-->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>











    {{-- <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
    </div> --}}
@stop
