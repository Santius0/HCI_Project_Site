@extends('proposal.base')
@php($subTitle = 'Research')

@section('post_body')
    {!! $research_methods_thread->body() !!}
@endsection
