<ul>
    <li>
        <a href="#">{{$child['name']}}</a>
        @if(isset($child['child']))
            @include('content.vertical_tree_child', ['child' => $child['child']])
        @endif
    </li>
</ul>