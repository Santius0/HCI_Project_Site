@extends('content.base')
@title('Video Prototype)

@section('post_body')
    <h4>Video Prototype</h4>
    <div class="media">
        <div class="media-body">
            {!! Embed::make($video->link)->parseUrl()->getIframe() !!}
        </div>
    </div>
@endsection