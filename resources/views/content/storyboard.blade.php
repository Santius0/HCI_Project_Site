@extends('content.base')
@title('Storyboard and Video Demo')

@section('post_body')
    <h4>Video Prototype</h4>
    <div class="media">
        <div class="media-body" style="text-align: center">
            {!! Embed::make("https://www.youtube.com/watch?v=fB8TyLTD7EE")->parseUrl()->setAttribute(['width' => 1000])->getIframe() !!}
        </div>
    </div>
@endsection