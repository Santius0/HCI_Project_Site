<h2>Application Prototyping Timeline</h2>
@php($invert = false)

<ul class="timeline">
    @foreach($timeline_items as $item)
        @include('content._timeline_badge',
                  ['invert' => $invert, 'badge_header' => isset($item['badge_header'])?$item['badge_header']:'Badge Header', 'badge_header_route' => isset($item['badge_header_route'])?$item['badge_header_route']:'#',
                  'badge_content' => $item['badge_content'], 'file_list' => isset($item['file_list'])?$item['file_list']:null, 'date' => isset($item['date'])?$item['date']:null
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