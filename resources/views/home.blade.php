@extends('layouts.base', ['bodyClass' => 'home'])

@section('body')
    <div class="container">
        @include('layouts._alerts')
    </div>

    <div class="jumbotron text-center">
        <div class="logo"><img src="{{ asset('images/My_UWI_Owl.png') }}" title={{ env('APP_NAME') }}></div>

        <div style="margin-top:40px">
            <div class="col-5">
                <h2>
                    A multifaceted mobile application focusing on assisting members of the University of the West Indies’s student population via efficient information delivery and data collection & analysis.
                </h2>
            </div>
            {{--@if (Auth::guest())--}}
                {{--<a class="btn btn-primary" href="{{ route('register') }}">--}}
                    {{--Create and Account--}}
                {{--</a>--}}
                {{--<a class="btn btn-default" href="{{ route('threads') }}">--}}
                    {{--Latest Updates--}}
                {{--</a>--}}
            {{--@else--}}
                {{--<a class="btn btn-default" href="{{ route('thread.create') }}">--}}
                    {{--Create an Update--}}
                {{--</a>--}}
            {{--@endif--}}
        </div>
    </div>
@endsection
