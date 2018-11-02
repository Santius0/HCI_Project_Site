
@php($title = $thread->title())
@extends('layouts.default')

@section('content')
    <div class="row forum">
        <div class="col-lg-3">
            @include('users._user_info', ['user' => $thread->author(), 'avatarSize' => 100])

            <hr>
            @if(!Auth::guest() && Auth::user()->id == $thread->author_id())
                <a class="btn btn-default btn-block" href="{{ route('thread.edit', $thread->id()) }}">
                    Edit
                </a>
                <a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#deleteThread">
                Delete
                </a>
            @endif
            @include('_partials._delete_modal', [
               'id' => 'deleteThread',
               'route' => ['thread.destroy', $thread->id()],
               'title' => 'Delete Thread',
               'body' => '<p>Are you sure you want to delete this thread and its replies? This cannot be undone.</p>',
               ])
            <a class="btn btn-link btn-block" href="{{ route('threads') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
        <div class="col-lg-9">
            <h1>{{ $title }}</h1>
            <hr>

            <div class="panel panel-default">
                <div class="panel-heading thread-info">
                    @include('forum.threads.info.avatar', ['user' => $thread->author()])

                    <div class="thread-info-author">
                        <a href="{{ route('threads', $thread->author()->username()) }}" class="thread-info-link">{{ $thread->author()->name() }}</a>
                         posted {{ $thread->createdAt()->diffForHumans() }}
                    </div>
                    {{--@include('forum.threads.info.tags')--}}
                </div>

                <div class="panel-body forum-content">
                    @markdown($thread->displayBody())
                </div>
            </div>

            @foreach ($thread->comments() as $reply)
                <div class="panel panel-default">
                    <div class="panel-heading thread-info">
                        @include('forum.threads.info.avatar', ['user' => $reply->author()])

                        <div class="thread-info-author">
                            <a href="{{ route('profile', $reply->author()->username()) }}" class="thread-info-link">
                                {{ $reply->author()->name() }}
                            </a> replied
                            {{ $reply->createdAt()->diffForHumans() }}
                        </div>
                        @if(!Auth::guest() && Auth::user()->id == $thread->author_id())
                        <div class="thread-info-tags">
                                <a class="btn btn-default btn-xs" href="{{ route('comment.edit', $reply->id()) }}">
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#deleteReply{{ $reply->id() }}">
                                    Delete
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="panel-body forum-content">
                        @markdown($reply->body())
                    </div>
                </div>

                @include('_partials._delete_modal', [
                    'id' => "deleteReply{$reply->id()}",
                    'route' => ['comment.delete', $reply->id()],
                    'title' => 'Delete Reply',
                    'body' => '<p>Are you sure you want to delete this reply? This cannot be undone.</p>',
                ])
            @endforeach

            @if(!Auth::guest())
                <hr>
                {!! Form::open(['route' => 'comment.store']) !!}
                {{--@formGroup('body')--}}
                {!! Form::textarea('body', null, ['class' => 'form-control wysiwyg', 'required']) !!}
                {{--@error('body')--}}
                {{--@endFormGroup--}}

                {!! Form::hidden('parent_id', $thread->id()) !!}
                {!! Form::hidden('author_id', Auth::id()) !!}
                {!! Form::submit('Reply', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
            @else
                <hr>
                <p class="text-center">
                    <a href="{{ route('login') }}">Sign in</a> to comment on this thread!
                </p>
            @endif
        </div>
    </div>
@endsection
