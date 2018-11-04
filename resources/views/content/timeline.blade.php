@extends('layouts.default')
@title('Prototyping Timeline')
@section('content')
    <h2>Application Prototyping Timeline</h2>
    <br>
    <br>
    @php($invert = false)
    <ul class="timeline">
        @foreach($timeline_items as $item)
            @include('content._timeline_badge',['invert' => $invert, 'badge_header' => isset($item['badge_header'])?$item['badge_header']:'Badge Header',
                                                'badge_header_route' => isset($item['badge_header_route'])?$item['badge_header_route']:'home',
                                                'badge_content' => isset($item['badge_content'])?$item['badge_content']:'Badge Content', 'file_list' => isset($item['file_list'])?$item['file_list']:null,
                                                'date' => isset($item['date'])?$item['date']:null, 'images' => isset($item['images'])?$item['images']:null
                                                ]
            )
            @if($invert)
                @php($invert = false)
            @else
                @php($invert = true)
            @endif
        @endforeach
        <li class="clearfix no-float"></li>
    </ul>
    <a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target=#ViewImages>
        Delete
    </a>
    @include('_partials._image_modal', ['id' => "ViewImages"])
@endsection