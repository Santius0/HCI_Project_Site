@extends('proposal.base')
@php($subTitle = 'Problem Definition')

@section('post_body')
    {!! $users_thread->body() !!}
@endsection
