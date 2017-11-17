@extends('layouts.front')

@section('heading', "Edit Thread")
@section('content')

@include('layouts.partials.error')

@include('layouts.partials.success')

  <div class="row">
      <div class="well">
        <form class="form-vertical" action="{{route('thread.update', $thread->id)}}" method="post" role="form" id="create-thread-form">
            {{ csrf_field() }}
            <!-- pass a method -->
            {{ method_field('put')}}
            <div class="form-group">
              <label for="subject">Subject</label>
              <!-- Show date from our database the "old subject" will show the old data we just enter -->
              <input type="text" class="form-control" name="subject" placeholder="Input..." value="{{$thread->subject}}">
            </div>

            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type" placeholder="Input..." value="{{$thread->type}}">
            </div>

            <div class="form-group">
              <label for="thread">Thread</label>
              <textarea class="form-control" name="thread" placeholder="Input..."> {{$thread->thread}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
@endsection
