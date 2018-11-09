@extends('content.base')
@title('Storyboard and Video Demo')

@section('post_body')
    <h4>Storyboard</h4>
    <p>

    </p>

    <article class="comic">
        <div class="panel">
            <p class="text top-left">Suddenly...</p>
            <p class="text bottom-right">...something amazing happened</p>
        </div>
        <div class="panel">
            <p class="text top-left">Try resizing...</p>
            <p class="text bottom-right">...it's responsive</p>
        </div>
        <div class="panel">
            <p class="speech">A speech bubble</p>
        </div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel">
            <p class="text bottom-right">THE END</p>
        </div>
    </article>
    <div class="media">
        <h4>Video Prototype</h4>
        <div class="media-body" style="text-align: center">
            {!! Embed::make("https://www.youtube.com/watch?v=fB8TyLTD7EE")->parseUrl()->setAttribute(['width' => 1000])->getIframe() !!}
        </div>
    </div>
@endsection