@php($title = 'Create New Update')

@extends('layouts.default')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>
    @include('forum.threads._form', ['route' => 'thread.store'])
@endsection
