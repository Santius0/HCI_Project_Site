@extends('proposal.base')
@php($subTitle = 'Problem Definition')

@section('post_body')
    {!! $research_methods_thread->body() !!}
@endsection
