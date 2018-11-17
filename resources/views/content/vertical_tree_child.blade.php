<ul>
    <li>
        <a href="#"><h4><b>{!! $child['name']!!}</b></h4></a>
        @if(isset($child['child']))
            @include('content.vertical_tree_child', ['child' => $child['child']])
        @endif
    </li>
</ul>