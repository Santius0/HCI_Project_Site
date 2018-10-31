@php($title = 'Edit Comment')

@extends('layouts.default')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>
    @include('forum.threads._form_comment', [
        'route' => ['comment.update', $comment->id()],
        'method' => 'PUT',
    ])
@endsection
