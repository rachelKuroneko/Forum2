<!-- What first time visitor will see -->
@extends('layouts.front')

@section('banner')
<div class="jumbotron">
    <div class="container">
        <h1>Join This is a Test Community</h1>
        <p>Help and get help</p>
        <p>
            <a class="btn btn-primary btn-lg">Learn More</a>
    </div>
</div>
@endsection
@section('heading', "Threads")

@section('content')
    @include('thread.partials.thread-list')
@endsection
