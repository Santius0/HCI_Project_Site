@if (count($thread->tags()))
    <div class="thread-info-tags">
        @foreach ($thread->tags() as $tag)
            <a href="{{ route('threads.tag', $tag->id()) }}">
                <span class="label label-default">{{ $tag->name() }}</span>
            </a>
        @endforeach
    </div>
@else
    <span class="label label-default">No Tags</span>
@endif
