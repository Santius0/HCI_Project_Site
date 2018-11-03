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
                {{--@if(isset($images))--}}
                    {{--<button class="btn btn-success" data-toggle="modal" data-taeget=".bs-example-modal-lg">See Images</button>--}}
                {{--@endif--}}
                <br>
            </div>
            <div class="timeline-footer">
                {{ isset($date) ? $date : '' }}
            </div>
        </div>
    </li>

    {{--@if(isset($images))--}}
        {{--<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">--}}
            {{--<div class="modal-dialog modal-lg">--}}
                {{--<div class="modal-content">--}}
                    {{--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
                        {{--@foreach($images as $image)--}}
                            {{--@include('_partials._image_modal', ['image' => $image])--}}
                        {{--@endforeach--}}
                        {{--<!-- Controls -->--}}
                        {{--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
                            {{--<span class="glyphicon glyphicon-chevron-left"></span>--}}
                        {{--</a>--}}
                        {{--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
                            {{--<span class="glyphicon glyphicon-chevron-right"></span>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endif--}}