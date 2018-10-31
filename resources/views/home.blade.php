@extends('layouts.base', ['bodyClass' => 'home'])

@section('body')
    <div class="container">
        {{--@include('layouts._alerts')--}}
    </div>

    <div class="jumbotron text-center">
        <div class="logo"><img src="{{ asset('images/placeholder1.png') }}" title="Laravel.io"></div>
        <h2>My UWI</h2>

        <div style="margin-top:40px">
            @if (Auth::guest())
                <a class="btn btn-primary" href="{{ route('register') }}">
                    Create and Account
                </a>
                <a class="btn btn-default" href="{{ route('threads') }}">
                    Latest Updates
                </a>
            @else
                <a class="btn btn-default" href="{{ route('thread.create') }}">
                    Create an Update
                </a>
            @endif
        </div>
    </div>
@endsection
