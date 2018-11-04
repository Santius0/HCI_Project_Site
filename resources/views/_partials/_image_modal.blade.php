{{--<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog modal-lg">--}}
        {{--<div class="modal-content">--}}


            {{--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">--}}
                {{--@foreach($images as $image)--}}
                    {{--<!-- Wrapper for slides -->--}}
                    {{--<div class="carousel-inner">--}}
                        {{--<div class="item active">--}}
                            {{--<img class="img-responsive" src="{{ isset($image['asset_src']) ? asset($image['asset_src']) : $image['src'] }}" alt="{{ $image['name'] }}">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--{{ $image['name'] }}--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
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

<div class="modal bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
{{--            @foreach($images as $image)--}}
                <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            {{--<img class="img-responsive" src="{{ isset($image['asset_src']) ? asset($image['asset_src']) : $image['src'] }}" alt="{{ $image['name'] }}">--}}
                            {{--<div class="carousel-caption">--}}
                                {{--{{ $image['name'] }}--}}
                            {{--</div>--}}
                        </div>
                    </div>
            {{--@endforeach--}}
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