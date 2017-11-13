<div class="list-group">
  @forelse($threads as $thread)
  <!-- This is each item -->
    <a href="{{ route('thread.show', $thread->id)}}" class="list-group-item">
        <h4 class="list-group-item-heading">{{$thread->subject}}</h4>
        <!-- str_limit to limit the string words  -->
        <p class="list-group-item-text">{{str_limit($thread->thread,100)}}</p>
    </a>
  <!-- This is list group  -->
  @empty
    <h5>No Threads</h5>

  @endforelse
</div>
