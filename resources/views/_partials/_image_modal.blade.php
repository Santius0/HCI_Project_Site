<div class="modal" id="{{ $id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @if(isset($images))
                        <div class="item active">
                            <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=One" alt="...">
                            <div class="carousel-caption">
                                One Image
                            </div>
                        </div>
                        @foreach($images as $image)
                            <div class="item">
                                <img class="img-responsive" src="http://placehold.it/1200x600/fffccc/000&text=Two" alt="...">
                                <div class="carousel-caption">
                                    Another Image
                                </div>
                            </div>
                        @endforeach
                            @endif
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

