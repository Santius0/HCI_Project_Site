@extends('proposal.base')
@php($subTitle = 'Problem Definition')

@section('post_body')
    {!! $problem_thread->body() !!}
@endsection
