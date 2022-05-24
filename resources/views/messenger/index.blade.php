
@extends('layouts.app')

@section('content')
    @include('messenger.partials.flash')

    <ul class="list custom-scrollbar">
        @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
    </ul>


@stop

