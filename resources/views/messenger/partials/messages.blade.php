{{--
<div style="margin-top: 15vh" class="card mt-4 m-auto">
    <div class="media">
        <a class="pull-left" href="#">
            <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64"
                 alt="{{ $message->user->name }}" class="img-circle">
        </a>
        <div class="media-body">
            <h5 class="media-heading">{{ $message->user->name }}</h5>
            <p>{{ $message->body }}</p>
            <div class="text-muted">
                <small>Posted {{ $message->created_at->diffForHumans() }}</small>
            </div>
        </div>
    </div>


</div> --}}



 @if ($message->user->id==Auth::id())
 <li>
    <div class="message my-message bg-success text-white"><img class="rounded-circle bordered float-start chat-user-img "width="64" src=" {{ ($message->user->profile_photo)? asset('uploads/profile_images/'.$message->user->profile_photo): Avatar::create($message->user->name)->toBase64() }} " width="80" alt="">
        {{ $message->user->name }}  <div class="message-data text-end"><span class="message-data-time text-danger">{{ $message->created_at->diffForHumans() }}</span></div>{{ $message->body }}
    </div>
  </li>
  @else
  <li class="clearfix">
    <div class="message other-message pull-right"><img class="rounded-circle float-end chat-user-img " width="64" src="{{ ($message->user->profile_photo)? asset('uploads/profile_images/'.$message->user->profile_photo): Avatar::create($message->user->name)->toBase64() }}" alt="">
        {{ $message->user->name }} <div class="message-data"><span class="message-data-time">{{ $message->created_at->diffForHumans() }}</span></div>       {{ $message->body }}
    </div>
  </li>
 @endif



