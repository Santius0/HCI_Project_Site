@extends('layouts.default')
@include('proposal.base')
@title(Project Proposal | 'Problem Definition')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>
    <div class="row forum">
        <div class="forum-content">
            {!! $problem_thread->body() !!}
        </div>
    </div>
@endsection
