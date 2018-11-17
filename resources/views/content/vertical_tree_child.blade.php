<ul>
    <li>
        <a href="#"><h4>{{$child['name']}}</h4></a>
        @if(isset($child['child']))
            @include('content.vertical_tree_child', ['child' => $child['child']])
        @endif
    </li>
</ul>