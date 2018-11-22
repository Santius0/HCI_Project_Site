@extends('content.base')
@title('Vertical Prototype')

@section('post_body')
    <br/>
    {{--@foreach($systems as $system)--}}
    {{--<div class="inline">--}}
        {{--<div class="tree">--}}
            {{--@include('content.vertical_tree_child', ['child' => $system['head']])--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    <h3>Prototype Layout</h3>
    <div id="vertical-prototype">
       <img src="{{ asset('images/prototypes/vertical-prototype.JPG')  }}">
    </div>
    <h3>See <a href="{{asset('Prototype/index.html')}}" target="_blank">HiFi Demo</a> </h3><hr><br>
@endsection