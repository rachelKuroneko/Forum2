@extends('layouts.front')

@section('content')

    <h4>{{$thread->subject}}</h4>
    <hr>

    <div class="thread-details">
        {{$thread->thread}}
    </div>
@endsection
