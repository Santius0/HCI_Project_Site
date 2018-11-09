@extends('layouts.base', ['bodyClass' => 'home'])

@section('body')
    <div class="container">
        @include('layouts._alerts')
    </div>

    <div class="jumbotron text-center">
        <div class="logo"><img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}>
            <h2>
                A multifaceted mobile application focusing on assisting members of the University of the West Indies’s
                student population via efficient information delivery and data collection & analysis.
            </h2>
        </div>
    </div>
    @php($invert = false)
    <ul class="timeline">
        @foreach($timeline_items as $item)
            @include('content._timeline_badge',['invert' => $invert, 'badge_header' => isset($item['badge_header'])?$item['badge_header']:'Badge Header',
                                                'badge_header_route' => isset($item['badge_header_route'])?$item['badge_header_route']:'home',
                                                'badge_content' => isset($item['badge_content'])?$item['badge_content']:'Badge Content', 'file_list' => isset($item['file_list'])?$item['file_list']:null,
                                                'date' => isset($item['date'])?$item['date']:null, 'images' => isset($item['images'])?$item['images']:null, 'in_page_id' => isset($item['in_page_id'])?$item['in_page_id']:'',
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
@endsection
