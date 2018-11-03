<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">



                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="http://placehold.it/1200x600/555/000&text=One" alt="...">
                        <div class="carousel-caption">
                            One Image
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=Two" alt="...">
                        <div class="carousel-caption">
                            Another Image
                        </div>
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="http://placehold.it/1200x600/fcf00c/000&text=Three" alt="...">
                        <div class="carousel-caption">
                            Another Image
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
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
                    <button class="btn btn-success" data-toggle="modal" data-taeget=".bs-example-modal-lg">See Images</button>
                {{--@endif--}}
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
                <button class="btn btn-success" data-toggle="modal" data-taeget=".bs-example-modal-lg">See Images</button>
                {{--@endif--}}
                <br>
            </div>
            <div class="timeline-footer">
                {{ isset($date) ? $date : '' }}
            </div>
        </div>
    </li>
@endif