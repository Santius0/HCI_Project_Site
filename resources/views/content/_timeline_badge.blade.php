@if(!$invert)
    <li>
@else
    <li class="timeline-inverted">
@endif
    <div class="timeline-badge">
            <a><i class="fa fa-circle" id=""></i></a>
    </div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4><a href="{{ route($badge_header_route) }}{{$in_page_id}}">{{ $badge_header }}</a></h4>
            </div>
            <div class="timeline-body">
                <p> {{ $badge_content }}</p>
                @if(isset($file_list))
                    <div class="files">
                        <ul class="file-list">
                            @foreach($file_list as $file)
                                <li><a href="{{ $file['link'] }}" target="_blank" class="video-link">{{ $file['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <br>
            </div>
            <div class="timeline-footer">
                @if(isset($images))
                    <a href="#" data-toggle="modal" data-target="#imageCarousel">Images</a>
                    @include('_partials._image_modal', ['id' => 'imageCarousel', 'images' => $images ])
                @endif
                {{ isset($date) ? $date : '' }}
            </div>
        </div>
    </li>
    <li class="clearfix no-float"></li>
