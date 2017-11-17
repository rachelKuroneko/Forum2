<!-- This is to display the list of threads  -->
@extends('layouts.front')

@section('heading')
<a class="btn pull-right btn-primary" href="{{ route('thread.create')}}">Create Threads</a>
<br>

@endsection

@section('content')

@include('thread.partials.thread-list')

@endsection
