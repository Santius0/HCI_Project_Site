@extends('content.base')
@php($subTitle = 'Users and Stakeholders')

@section('post_body')
    {!! $users_thread->body() !!}
@endsection
