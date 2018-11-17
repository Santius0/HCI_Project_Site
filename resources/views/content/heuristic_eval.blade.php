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
                    @endFormGroup
                </div>
                <div class="timeline-body">
                    @endFormGroup @formGroup('body')
                    {!! Form::label('Details') !!}
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}
                    @error('body')
                    @endFormGroup
                </div>
                <div class="timeline-footer">
                    <div class="form-radio form-radio-inline">
                        <div class="form-radio-legend">Prefered Pronoun</div>
                        <label class="form-radio-label">
                            <input name=pronoun class="form-radio-field" type="radio" required value="He" />
                            <i class="form-radio-button"></i>
                            <span>He</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=pronoun class="form-radio-field" type="radio" required value="She" />
                            <i class="form-radio-button"></i>
                            <span>She</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=pronoun class="form-radio-field" type="radio" required value="They" />
                            <i class="form-radio-button"></i>
                            <span>They</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=pronoun class="form-radio-field" type="radio" required value="Ze" />
                            <i class="form-radio-button"></i>
                            <span>Ze</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=pronoun class="form-radio-field" type="radio" required value="A pronoun not listed" />
                            <i class="form-radio-button"></i>
                            <span>A pronoun not listed</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=pronoun class="form-radio-field" type="radio" required value="No pronoun preference" />
                            <i class="form-radio-button"></i>
                            <span>No pronoun preference</span>
                        </label>
                        <small class="form-element-hint">Feel free to choose</small>
                    </div>
                </div>
                {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
                {!! Form::close() !!}
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