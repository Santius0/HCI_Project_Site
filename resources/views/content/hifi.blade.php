@extends('content.base')
@title('Vertical Prototype')

@section('post_body')
    <br/>
    <h3>See <a href="{{asset('Prototype/index.html')}}" target="_blank">HiFi Demo</a> </h3><hr><br>
    <h3>Vertical Prototype</h3>
    {{--@foreach($systems as $system)--}}
    {{--<div class="inline">--}}
        {{--<div class="tree">--}}
            {{--@include('content.vertical_tree_child', ['child' => $system['head']])--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@endforeach--}}
    <div id="vertical-prototype">
        <table>
            <tr>
                <th>Newsfeed</th>
                <th>Alerts</th>
                <th>Timetable</th>
                <th>Campus Status</th>
                <th>Shuttle Services</th>
                <th>Campus Maps</th>
                <th>Setting</th>
            </tr>
        </table>
    </div>
@endsection