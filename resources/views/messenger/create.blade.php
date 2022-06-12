@extends('layouts.app')

@section('content')

 <div class="card m-auto">

  <div class="card-body">

</div>
<h1 class="text-center">Compose message</h1>
<form action="{{ route('messages.store') }}" method="post">
    {{ csrf_field() }}
    <div class="col-md-6 m-auto">
        <!-- Subject Form Input -->
        <div class="form-group">
            <label class="control-label">Subject</label>
            <input type="text" class="form-control" name="subject" placeholder="Subject"
                  required   value="{{ old('subject') }}">
        </div>

        <!-- Message Form Input -->
        <div class="form-group">
            <label class="control-label">Message</label>
            <textarea name="message" class="form-control">{{ old('message') }}</textarea>
        </div>



        @if($users->count() > 0)



            <div class="checkbox p-0">
                @foreach($users as $user)
                    {{-- <label title="{{ $user->name }}">{{ $user->name }} </label>
                        <input type="checkbox" class="form-check-input" name="recipients[]"  value="{{ $user->id }}"> --}}
                         @if ($user->id!=Auth::id())
                         <div>
                            <input class="form-check-input" id="{{$user->name}}" type="checkbox"  name="recipients[]"  value="{{ $user->id }}">
                            <label class="form-check-label" for="{{$user->name}}">{{$user->name}}</label>
                        </div>

                         @endif


                @endforeach
            </div>
            @else

              <h4>User Not Found try another </h4>
        @endif

        <!-- Submit Form Input -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary form-control w-25 m-auto">Send</button>
        </div>
    </div>
</form>

<form method="GET" class="mb-5">
<div class="input-group mb-3 w-50 m-auto">
    <input
        type="text"
        name="search"
        value="{{ request()->get('search') }}"
        class="form-control"
        placeholder="Search User"
        aria-label="Search User"
        aria-describedby="button-addon2">
    <button class="btn btn-primary" type="submit" id="button-addon2">Search </button>
</div>

</form>

  </div>


@stop
