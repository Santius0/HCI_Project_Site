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
    <h2>Prototype Layout</h2>
    <div id="vertical-prototype">
       <img src="{{ asset('images/prototypes/vertical-prototype.JPG')  }}">
    </div>
    <h2>See <a href="{{asset('Prototype/index.html')}}" target="_blank">HiFi Prototype</a> </h2><hr><br>
@endsection