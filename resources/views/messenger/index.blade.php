
@extends('layouts.app')


@section('content')
   <div class="container m-auto pt-4">
    <a href="{{asset(route('messages.create'))}}" class="btn btn-success">New Message</a>
    @include('messenger.partials.flash')

    <ul class="list custom-scrollbar">
        @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
    </ul>
   </div>



@stop

