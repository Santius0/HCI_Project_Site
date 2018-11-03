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
                <h4><a href="{{ route($badge_header_route) }}">{{ $badge_header }}</a></h4>
            </div>
            <div class="timeline-body">
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
                @if(isset($images))
                    @include('_partials._image_modal', ['images'=>$images])
                    <button class="btn btn-success" data-toggle="modal" data-taeget=".bs-example-modal-lg">See Images</button>
                @endif
                <div class="alert alert-info">
                    <p>Check out the full prototype on  <a href="https://share.proto.io/T4EDZF/" class="alert-link">Proto.io</a></p>
                </div>
                <br>
            </div>
            <div class="timeline-footer">
                {{ isset($date) ? $date : '' }}
            </div>
        </div>
    </li>