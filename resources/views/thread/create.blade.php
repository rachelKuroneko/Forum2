@extends('layouts.front')

@section('heading', "Create Thread")
@section('content')

@include('layouts.partials.error')

@include('layouts.partials.success')

  <div class="row">
      <div class="well">
        <form class="form-vertical" action="{{route('thread.store')}}" method="post" role="form" id="create-thread-form">
            {{ csrf_field() }}
            <div class="form-group">
            <fieldset>
              <label for="subject">Subject</label>
              <input type="text" class="form-control" name="subject" placeholder="Input..." value="{{old('subject')}}">
            </div>

            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type" placeholder="Input..." value="{{old('type')}}">
            </div>

            <div class="form-group">
              <label for="thread">Thread</label>
              <textarea class="form-control" name="thread" placeholder="Input...">{{old('thread')}}</textarea>
            </div>

            <div class="form-group">
                {!! app('captcha')->display(); !!}
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </fieldset>
          </form>
        </div>
      </div>
@endsection
