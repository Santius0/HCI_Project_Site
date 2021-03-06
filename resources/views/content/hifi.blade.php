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
    <p>The results of the heuristic analysis were used to update the HiFi Prototype.</p>
    <h4><a href="{{asset('HiFi_Prototype/HiFi_Prototype_1.1/index.html')}}" target="_blank">HiFi Prototype 1.1</a></h4>
    <h2>Prototype Layout</h2>
    <p>The following is an overview of the HiFi prototype.</p>
    <div id="vertical-prototype">
       <img src="{{ asset('images/prototypes/vertical-prototype.JPG')  }}">
    </div>
@endsection
