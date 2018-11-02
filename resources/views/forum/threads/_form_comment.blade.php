{!! Form::open(['route' => $route, 'method' => $method ?? 'POST']) !!}

@php($content = isset($comment) ? $comment->body() : '')
@formGroup('body')
    {!! Form::label('body') !!}
{{--    {!! Form::textarea('body', isset($comment) ? $comment->body() : null, ['class' => 'form-control wysiwyg', 'required']) !!}--}}
        @include('layouts.editor')
    @error('body')
@endFormGroup

{!! Form::hidden('author_id', $comment->author_id) !!}
{!! Form::hidden('parent_id', $comment->parent_id) !!}
{!! Form::submit('Update Comment', ['class' => 'btn btn-primary btn-block']) !!}
<a href="{{ route('thread.show', $comment->parent_id()) }}" class="btn btn-default btn-block">Cancel</a>
{!! Form::close() !!}
