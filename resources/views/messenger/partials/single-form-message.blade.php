{{--
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}



    <!-- Message Form Input -->
    <div class="form-group">
        <textarea name="message" class="form-control">{{ old('message') }}</textarea>
    </div>

    @if($users->count() > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->name }}">
                    <input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}
                </label>
            @endforeach
        </div>
    @endif

    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </div>
</form> --}}

<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}


    <div class="chat-message clearfix">
        <div class="row">
          <div class="col-xl-12 d-flex">

            <div class="input-group text-box">
              <input class="form-control input-txt-bx" id="message-to-send" type="text" name="message" placeholder="Type a message......">
              <button class="btn btn-primary input-group-text" type="submit">send</button>
            </div>

            @if($users->count() > 0)
        {{-- <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->name }}">
                    <input hidden type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}
                </label>
            @endforeach
        </div> --}}
    @endif
          </div>
        </div>
      </div>



</form>

