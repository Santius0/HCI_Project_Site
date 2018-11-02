@php($subTitle = isset($activeTag) ? $activeTag->name() : null)

@title('Updates' . $subTitle)

@extends('layouts.default')

@section('content')
    <h1>{{ $title }}</h1>
    <hr>

    <div class="row forum">
        <div class="col-lg-3">
            {{ Form::open(['route' => 'threads', 'method' => 'GET']) }}
                <div class="form-group">
                    {{--{{ Form::text('search', $search ?? null, ['class' => 'form-control', 'placeholder' => 'Search for threads...']) }}--}}
                </div>
            {{ Form::close() }}

            @if(Auth::user())
            <a class="btn btn-success btn-block" href="{{ route('thread.create') }}">Create Thread</a>
            @endif

            <h3>Tags</h3>
            <div class="list-group">
                {{--<a href="{{ route('threads') }}" class="list-group-item {{ active('thread*', ! isset($activeTag) || $activeTag === null) }}">All</a>--}}

                @foreach (App\Tag::orderBy('name')->get() as $tag)
                    <a href="{{ route('threads.tag', $tag->id()) }}"
                       class="list-group-item{{ isset($activeTag) && $tag->matches($activeTag) ? ' active' : '' }}">
                        {{ $tag->name() }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-9">
            @if (count($threads))
                        @foreach ($threads as $thread)
                            <div class="panel panel-default">
                                <div class="panel-heading thread-info">
                                    @if (count($thread->comments()))
                                        @include('forum.threads.info.avatar', ['user' => $thread->comments()->last()->author()])
                                    @else
                                        @include('forum.threads.info.avatar', ['user' => $thread->author()])
                                    @endif

                                    <div class="thread-info-author">
                                    @if (count($thread->comments()))
                                    @php($lastReply = $thread->comments()->last())
                                    <a href="{{ route('profile', $lastReply->author()->username()) }}" class="thread-info-link">{{ $lastReply->author()->name() }}</a> replied
                                    {{ $lastReply->createdAt()->diffForHumans() }}
                                    @else
                                    <a href="{{ route('profile', $thread->author()->username()) }}" class="thread-info-link">{{ $thread->author()->name() }}</a> posted
                                    {{ $thread->createdAt()->diffForHumans() }}
                                    @endif
                                    </div>

                                @include('forum.threads.info.tags')
                                </div>

                                <div class="panel-body">
                                    <a href="{{ route('thread.show', $thread->id()) }}">
                                        <span class="badge pull-right">{{ count($thread->comments()) }}</span>
                                        <h4 class="media-heading">{{ $thread->title() }}</h4>
                                        <p>{{ $thread->excerpt() }}</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                        {{--<div class="text-center">--}}
                            {{--{!! $threads->render() !!}--}}
                            {{--Pagination Thing--}}
                        {{--</div>--}}
            @else
                <div class="alert alert-info text-center">
                    No threads were found!
                    <a href="{{ route('thread.create') }}" class="alert-link">Create a new one.</a>
                </div>
            @endif
        </div>
    </div>
@endsection
