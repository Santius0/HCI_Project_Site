@extends('content.base')
@title('Heuristic Evaluation')

@section('post_body')
    @if(Auth::user && (Auth::user()->user_type() == \App\User::DEVELOPER || Auth::user()->user_type == \App\User::TEST_USER))
        <div id="evaluation">
            <h3>Navigate the <a href="{{ route('hifi.demo') }}" target="_blank">HiFi Prototype</a> and if at any point you disagree with any of the following statements, write up and submit a response.<br>
            Be sure to rate how serious you think the problem is.</h3><br>
            <smal>
                0 = I don’t agree that this is a usability problem at all<br>
                1 = Cosmetic problem only: need not be fixed unless extra time is available on project<br>
                2 = Minor usability problem: fixing this should be given low priority<br>
                3 = Major usability problem: important to fix, so should be given high priority<br>
                4 = Usability catastrophe: imperative to fix this before product can be released<br>
            </smal>
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
                                <input name=rating class="form-radio-field" type="radio" required value="0" />
                                <i class="form-radio-button"></i>
                                <span>0</span>
                            </label>
                            <label class="form-radio-label">
                                <input name=rating class="form-radio-field" type="radio" required value="1" />
                                <i class="form-radio-button"></i>
                                <span>1</span>
                            </label>
                            <label class="form-radio-label">
                                <input name=rating class="form-radio-field" type="radio" required value="2" />
                                <i class="form-radio-button"></i>
                                <span>2</span>
                            </label>
                            <label class="form-radio-label">
                                <input name=rating class="form-radio-field" type="radio" required value="3" />
                                <i class="form-radio-button"></i>
                                <span>3</span>
                            </label>
                            <label class="form-radio-label">
                                <input name=rating class="form-radio-field" type="radio" required value="4" />
                                <i class="form-radio-button"></i>
                                <span>4</span>
                            </label>
                        </div>
                    </div>
                    {!! Form::submit('Submit Feedback', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                </div>
                <hr><br>
            @endforeach
        </div>
        <br><br>
    @endif
    <div>
        Results
    </div>
   <br>
    <div>
        Evaluation Analysis
    </div>
@endsection