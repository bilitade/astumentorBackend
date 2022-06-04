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
        <div class="media p-2"><img class="rounded-circle user-image" src="{{Avatar::create($thread->subject)->toBase64() }}" alt="">

            <div class="media-body p-2">
              <div class="about">
                <div class="name">  <h4 class="media-heading">
                    <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
                        @if ($thread->userUnreadMessagesCount(Auth::id())>0)
                        <span class="badge rounded-pill badge-danger"><a class="badge badge-light text-dark" href="{{ route('messages.show', $thread->id) }}" data-bs-original-title="" title="">{{ $thread->userUnreadMessagesCount(Auth::id()) }}</a> unread</span>
                        @endif

                    {{-- ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4> </div> --}}
                <div class="status"> <Strong  style="font-style: italic"class="">{{ $thread->latestMessage->body }}</Strong></div>
                <p>
                    <small><strong>chat Members:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
                </p>
              </div>
            </div>
          </div>
    </div>

  </li>
