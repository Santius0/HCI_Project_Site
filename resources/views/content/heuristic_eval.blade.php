@extends('content.base')
@title('Heuristic Evaluation')

@section('post_body')
    <div id="evaluation">
        @foreach($heuristics as $heuristic)
            <br>
            {!! Form::open(['route' => 'thread.store', 'method' => $method ?? 'POST']) !!}
            <div class="timeline-panel">
                <div class="timeline-heading">
                    @formGroup('subject')
                    {!! Form::label($heuristic['title']) !!}
                    {!! Form::hidden('title', $heuristic['title'], ['class' => 'form-control', 'required', 'maxlength' => '60']) !!}
                    <span class="help-block">{!! $heuristic['description'] !!}}</span>
                    @error('subject')
                    @endFormGroup                </div>
                <div class="timeline-body">
                    @endFormGroup @formGroup('body')
                    {!! Form::label('Details') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}
                    @error('body')
                    @endFormGroup
                </div>
                <div class="timeline-footer">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <hr><br>
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