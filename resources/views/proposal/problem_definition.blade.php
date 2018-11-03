@extends('layouts.default')
@include('proposal.base')
@php($subTitle = 'Problem Definition')

@section('content')
    <div class="row forum">
        {!! $problem_thread->body() !!}
    </div>
@endsection
