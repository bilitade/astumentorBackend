<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

{{-- <div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div> --}}

<li class="clearfix">
    <div class="card p-2 alert {{ $class }}  w-75 m-auto rounded" >
        <div class="card-head">

        </div>
        <div class="media p-2"><img class="rounded-circle user-image" src="{{asset('imgs/noprofile.png')}}" alt="">

            <div class="media-body p-2">
              <div class="about">
                <div class="name">  <h4 class="media-heading">
                    <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
                    ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4> </div>
                <div class="status">{{ $thread->latestMessage->body }}</div>
              </div>
            </div>
          </div>
    </div>

  </li>
