@extends('content.base')
@title('Heuristic Evaluation')

@section('post_body')
{{--    @if(Auth::user() && (Auth::user()->user_type() == \App\User::DEVELOPER || Auth::user()->user_type == \App\User::TEST_USER))--}}
        <div id="evaluation">
            <h3>Navigate the <a href="{{ route('hifi.demo') }}" target="_blank">HiFi Prototype</a> and if at any point you feel like any of the following design principles are violated write up where and why.<br>
            Be sure to rate how serious you think the problem is from 0 to 4.</h3><br>
            <h3>Rating Scale</h3><br>
            <h5>
                0 = I don’t agree that this is a usability problem at all<br>
                1 = Cosmetic problem only: need not be fixed unless extra time is available on project<br>
                2 = Minor usability problem: fixing this should be given low priority<br>
                3 = Major usability problem: important to fix, so should be given high priority<br>
                4 = Usability catastrophe: imperative to fix this before product can be released<br>
            </h5>
{{--            @foreach($heuristics as $heuristic)--}}
                {{--<br>--}}
{{--                {!! Form::open(['route' => 'thread.store', 'method' => $method ?? 'POST']) !!}--}}
                {{--<div class="timeline-panel">--}}
                    {{--<div class="timeline-heading">--}}
                        {{--@formGroup('subject')--}}
                        {{--{!! Form::label($heuristic['title']) !!}--}}
                        {{--{!! Form::hidden('title', $heuristic['title'].'-'.Auth::user()->name().'-'.\Carbon\Carbon::now()->toDateTimeString(), ['class' => 'form-control', 'required', 'maxlength' => '60']) !!}--}}
                        {{--<span class="help-block">{!! $heuristic['description'] !!}}</span>--}}
                        {{--@error('subject')--}}
                        {{--@endFormGroup--}}
                    {{--</div>--}}
                    {{--<div class="timeline-body">--}}
                        {{--@endFormGroup @formGroup('body')--}}
                        {{--{!! Form::label('Details') !!}--}}
                        {{--{!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}--}}
                        {{--@error('body')--}}
                        {{--@endFormGroup--}}
                    {{--</div>--}}
                    {{--<div class="timeline-footer">--}}
                        {{--@formGroup('rating')--}}
                        {{--<div class="form-radio form-radio-inline">--}}
                            {{--<div class="form-radio-legend">Problem Rating</div>--}}
                            {{--<label class="form-radio-label">--}}
                                {{--<input name=rating class="form-radio-field" type="radio" />--}}
                                {{--<i class="form-radio-button"></i>--}}
                                {{--<span>0</span>--}}
                            {{--</label>--}}
                            {{--<label class="form-radio-label">--}}
                                {{--<input name=rating class="form-radio-field" type="radio"/>--}}
                                {{--<i class="form-radio-button"></i>--}}
                                {{--<span>1</span>--}}
                            {{--</label>--}}
                            {{--<label class="form-radio-label">--}}
                                {{--<input name=rating class="form-radio-field" type="radio"/>--}}
                                {{--<i class="form-radio-button"></i>--}}
                                {{--<span>2</span>--}}
                            {{--</label>--}}
                            {{--<label class="form-radio-label">--}}
                                {{--<input name=rating class="form-radio-field" type="radio"/>--}}
                                {{--<i class="form-radio-button"></i>--}}
                                {{--<span>3</span>--}}
                            {{--</label>--}}
                            {{--<label class="form-radio-label">--}}
                                {{--<input name=rating class="form-radio-field" type="radio"/>--}}
                                {{--<i class="form-radio-button"></i>--}}
                                {{--<span>4</span>--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--@error('rating')--}}
                        {{--@endFormGroup--}}
                    {{--</div>--}}
{{--                    {!! Form::submit('Submit Feedback', ['class' => 'btn btn-primary btn-block']) !!}--}}
{{--                    {!! Form::close() !!}--}}
                {{--</div>--}}
                {{--<hr><br>--}}
            {{--@endforeach--}}
        </div>
        <br><br>
    {{--@endif--}}
    <div>
        <h3>Heuristic Evaluation Feedback</h3>
        {{--@foreach($results as $result)--}}
            {{--<div class="timeline-panel">--}}
                {{--<div class="timeline-heading">--}}
                    {{--<h4> {!! $result->title !!} </h4>--}}
                {{--</div>--}}
                {{--<div class="timeline-body">--}}
                    {{--<p> {!! $result->body !!} </p>--}}
                    {{--<br>--}}
                {{--</div>--}}
                {{--<div class="timeline-footer">--}}
                    {{--{!! $result->rating !!}--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    </div>
   <hr><br>
    <div>
        <h3>Evaluation Analysis</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
            velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem
            ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
            molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    </div>
@endsection