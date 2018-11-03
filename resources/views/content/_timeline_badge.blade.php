@if(!$invert)
    <li>
        <div class="timeline-badge">
            <a><i class="fa fa-circle" id=""></i></a>
        </div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4><a href="{{ route($badge_header_route) }}">{{ $badge_header }}</a></h4>
            </div>
            <div class="timeline-body">
{{--                <p>{{ \App\Thread::where('title', 'Conceptual Design')->first()->excerpt() }}</p>--}}
                <p> {{ $badge_content }}</p>
                @if(isset($file_list))
                    <div class="files">
                        <ul class="file-list">
                            @foreach($file_list as $file)
                                <li><a href="{{ $file['link'] }}" class="video-link">{{ $file['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>
            </div>
            <div class="timeline-footer">
                {{ isset($date) ? $date : '' }}
            </div>
        </div>
    </li>
@else
    <li class="timeline-inverted">
        <div class="timeline-badge">
            <a><i class="fa fa-circle" id=""></i></a>
        </div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4><a href="{{ route($badge_header_route) }}">{{ $badge_header }}</a></h4>
            </div>
            <div class="timeline-body">
                {{--                <p>{{ \App\Thread::where('title', 'Conceptual Design')->first()->excerpt() }}</p>--}}
                <p> {{ $badge_content }}</p>
                @if(isset($file_list))
                    <div class="files">
                        <ul class="file-list">
                            @foreach($file_list as $file)
                                <li><a href="{{ $file['link'] }}" class="video-link">{{ $file['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>
            </div>
            <div class="timeline-footer">
                {{ isset($date) ? $date : '' }}
            </div>
        </div>
    </li>
@endif