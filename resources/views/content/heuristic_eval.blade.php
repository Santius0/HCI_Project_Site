@extends('content.base')
@title('Heuristic Evaluation')

@section('post_body')
    <div id="evaluation">
        @foreach($heuristics as $heuristic)
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>{{ $heuristic['title'] }}</h4>
            </div>
            <div class="timeline-body">
                <p> {{ $heuristic['description'] }}</p>
                <br>
            </div>
            <div class="timeline-footer">
                {!! Form::open(['route' => 'thread.store', 'method' => $method ?? 'POST']) !!}

                @formGroup('subject')
                {!! Form::label('title') !!}
                {!! Form::hidden('title', $heuristic['title'], ['class' => 'form-control', 'required', 'maxlength' => '60']) !!}
                <span class="help-block">Maximum 60 characters.</span>
                @error('subject')
                @endFormGroup

                @endFormGroup @formGroup('body')
                {!! Form::label('Details') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control wysiwyg', 'required']) !!}
                @error('body')
                @endFormGroup

                {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                {{--<a href="{{ isset($thread) ? route('thread.show', $thread->id()) : route('threads') }}" class="btn btn-default btn-block">Cancel</a>--}}
                {!! Form::close() !!}
            </div>
        </div>
        @endforeach
    </div>
    <div>
        Results
    </div>
   <br>
    <div>
        Evaluation Analysis
    </div>
@endsection