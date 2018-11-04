@php($first = true )
<div class="modal" id="{{ $id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($images as $image)
                            @php($src = "http://placehold.it/1200x600/fffccc/000&text=Two")
                            @if($first)
                                @php($first = false)
                                <div class="item active">
                                    <img class="img-responsive" src="{{ $src }}" alt= "{{ $image['name'] }}">
                                    {{--<div class="carousel-caption">--}}
                                        {{--One Image--}}
                                    {{--</div>--}}
                                </div>
                            @else
                                <div class="item">
                                    <img class="img-responsive" src="{{ $src }}" alt= "{{ $image['name'] }}">
                                    {{--<div class="carousel-caption">--}}
                                        {{--One Imgggage--}}
                                    {{--</div>--}}
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

