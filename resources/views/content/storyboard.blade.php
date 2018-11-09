@extends('content.base')
@title('Storyboard and Video Demo')

@section('post_body')
    <h4>Storyboard</h4>
    <p>
        The following is a storyboard depicting...
    </p>

    <article class="comic">
        <div class="panel">
            {{--<p class="text top-left">Suddenly...</p>--}}
            {{--<p class="text bottom-right">...something amazing happened</p>--}}
            <p class="text">Storyboard will start here...</p>
        </div>
        <div class="panel">
            {{--<p class="text top-left">Try resizing...</p>--}}
            {{--<p class="text bottom-right">...it's responsive</p>--}}
        </div>
        <div class="panel">
            {{--<p class="speech">A speech bubble</p>--}}
        </div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel"></div>
        <div class="panel">
            {{--<p class="text bottom-right">THE END</p>--}}
            <p class="text">Storyboard will end here...</p>
        </div>
    </article>
    <br><hr><br>
    <div class="media">
        <h4>Video Prototype</h4>
        <p>The storyboard detailed above is demo'd in the following video</p>
        <div class="media-body" style="text-align: center">
            {!! Embed::make("https://www.youtube.com/watch?v=fB8TyLTD7EE")->parseUrl()->setAttribute(['width' => 1000])->getIframe() !!}
        </div>
    </div>
    <br><hr><br>
    <h1>Major Issues in Task Centered Walkthrough</h1>
    <br><hr><br>
    <h1>Brainstorming and Sketching Session</h1>
@endsection