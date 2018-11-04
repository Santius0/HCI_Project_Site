@title('Something went wrong')

@extends('layouts.base')

@section('body')
    <div class="jumbotron text-center">
        <h1>{{ $title }}</h1>
        <p>
            We've been notified and will try to fix the problem as soon as possible.<br>
        </p>
    </div>
@endsection
