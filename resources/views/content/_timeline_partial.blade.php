<h2>Application Prototyping Timeline</h2>
@php($invert = false)

<ul class="timeline">
    @foreach($timeline_items as $item)
        @include('content._timeline_badge',
                  ['invert' => $invert, 'badge_header' => $item['badge_header'], 'badge_header_route' => isset($item['badge_header_route'])?$item['badge_header_route']:'#',
                  'badge_content' => $item['badge_content'], 'file_list' => isset($item['file_list'])?$item['file_list']:null, 'date' => isset($item['date'])?$item['date']:null
                   ]
        )
        @php(
            if($invert){
                $invert = false;
            }
            else{
                $invert = true;
            }
        )
    @endforeach
    <li class="clearfix no-float"></li>
</ul>