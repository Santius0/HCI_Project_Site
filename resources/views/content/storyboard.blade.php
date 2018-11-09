@extends('content.base')
@title('Conceptual Design')

@section('post_body')
    <h4>Video Prototype</h4>
    <div class="media">
        <div class="media-body">
            {!! Embed::make("https://www.youtube.com/watch?v=fB8TyLTD7EE")->parseUrl()->setAttribute(['width' => 1000])->getIframe() !!}
        </div>
    </div>
@endsection