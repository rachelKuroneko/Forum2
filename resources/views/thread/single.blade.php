@extends('layouts.front')

@section('content')

    <h4>{{$thread->subject}}</h4>
    <hr>

    <div class="thread-details">
      <!-- so that the syntaxs do not escape the characters  -->
        {!! \Michelf\Markdown::defaultTransform($thread->thread)!!}
    </div>
    <br>

<!-- Edit and delete button only visible to the user who create the thread -->
@if(auth()->user()->id == $thread->user_id)
    <div class="actions">
        <!-- This is where the edit button is together with the edit function called thread.edit -->
        <a href="{{ route('thread.edit', $thread->id)}}" class="btn btn-info btn-xs">Edit</a>

        <!-- destroy the thread id in the thread.destroy function -->
        <form action="{{ route('thread.destroy', $thread->id)}}" method="POST" class="iniline-it">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">
        </form>

    </div>
@endif
@endsection
