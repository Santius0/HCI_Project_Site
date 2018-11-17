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
                        <div class="form-radio-legend">Problem Rating</div>
                        <label class="form-radio-label">
                            <input name=rating class="form-radio-field" type="radio" required value="He" />
                            <i class="form-radio-button"></i>
                            <span>0</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=rating class="form-radio-field" type="radio" required value="She" />
                            <i class="form-radio-button"></i>
                            <span>1</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=rating class="form-radio-field" type="radio" required value="They" />
                            <i class="form-radio-button"></i>
                            <span>2</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=rating class="form-radio-field" type="radio" required value="Ze" />
                            <i class="form-radio-button"></i>
                            <span>3</span>
                        </label>
                        <label class="form-radio-label">
                            <input name=rating class="form-radio-field" type="radio" required value="A rating not listed" />
                            <i class="form-radio-button"></i>
                            <span>4</span>
                        </label>
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