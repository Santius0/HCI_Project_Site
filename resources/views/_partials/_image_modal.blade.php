@php($first = true )
<div class="modal" id="{{ $id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($images as $image)
                            @if($first)
                            <div class="item active">
                                <img class="img-responsive" src="{{ isset($image['asset_src']) ? $image['asset_src'] : $image['src'] }}" alt="{{ $image['name'] }}">
                                <div class="carousel-caption">
                                    {{$image['name']}}
                                </div>
                            </div>
                            @else
                            <div class="item">
                                <img class="img-responsive" src="{{ isset($image['asset_src']) ? $image['asset_src'] : $image['src'] }}" alt="{{ $image['name'] }}">
                                <div class="carousel-caption">
                                    {{$image['name']}}
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                <!-- Wrapper for slides -->
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

