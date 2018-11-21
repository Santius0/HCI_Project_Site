@extends('content.base')
@title('Heuristic Evaluation')

@section('post_body')
{{--    @if(Auth::user() && (Auth::user()->user_type() == \App\User::DEVELOPER || Auth::user()->user_type == \App\User::TEST_USER))--}}
        <div id="evaluation">
            <h3>Navigate the <a href="{{ route('hifi.demo') }}" target="_blank">HiFi Prototype</a> and if at any point you feel like any of the following design principles are violated write up where and why.<br>
            Be sure to rate how serious you think the problem is from 0 to 4.</h3><br>
            <h4>Rating Scale:</h4>
            <h5>
                0 = I don’t agree that this is a usability problem at all<br>
                1 = Cosmetic problem only: need not be fixed unless extra time is available on project<br>
                2 = Minor usability problem: fixing this should be given low priority<br>
                3 = Major usability problem: important to fix, so should be given high priority<br>
                4 = Usability catastrophe: imperative to fix this before product can be released<br>
            </h5>
            @foreach($heuristics as $heuristic)
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h3>{!! $heuristic['title'] !!}</h3><br>
                        <span class="help-block" style="font-size: 16px;">{!! $heuristic['description'] !!}</span>
                    </div><br>
                    @if(isset($heuristic['responses']) && count($heuristic['responses'])>0 )
                        @php($rating = 0)
                        @foreach($heuristic['responses'] as $response)
                            <div class="timeline-body">
                                    <ul>
                                        @php($rating += $response['rating'])
                                        <li><div>
                                                <p>{!! $response['body'] !!}</p>
                                                <p>Rating: {{ $response['rating'] }}</p>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                        @endforeach
                            <div class="timeline-footer">
                                <p>
                                    Average Rating: {{ $rating/count($heuristic['responses']) }}
                                </p>
                            </div>
                    @endif
                </div>
                <br><br>
            @endforeach
        </div>
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
