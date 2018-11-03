@extends('layouts.default')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>
    <div class="row forum">
        <div class="forum-content">
            @yield('post_body')
        </div>
    </div>
@endsection
