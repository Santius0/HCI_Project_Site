@extends('content.base')
@title('Hifi Prototype and Heuristic Evaluation')

@section('post_body')
        <div>
            <h3>HiFi Prototype Developed.</h3>
            <h4>See <a href="{{asset('HiFi_Prototype/HiFi_Prototype_1.0/index.html')}}" target="_blank">HiFi Prototype 1.0</a></h4>
            <h2>The HiFi Prototype follows the following layout</h2>
            <br>
            <div id="vertical-prototype">
                <img src="{{ asset('images/prototypes/vertical-prototype.JPG')  }}">
            </div>
        </div>
        <br>
        <div id="evaluation">
            <h3>Navigate the <a href="{{ asset('HiFi_Prototype\HiFi_Prototype_1.0') }}" target="_blank">HiFi Prototype 1.0</a> and if at any point you feel like any of the following design principles are violated write up where and why.<br>
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
                            @php($rating += $response['rating'])
                            <div class="timeline-body">
                                    <ul>
                                        <li><p>
                                                {{ $response['author'] }} -
                                                {{ $response['body'] }} <br>
                                                <b>Rating: {{ $response['rating'] }}</b>
                                            </p>
                                        </li>
                                    </ul>
                            </div>
                        @endforeach
                            <div class="timeline-footer">
                                <p>
                                    Average Rating: {{ round($rating/count($heuristic['responses']),2) }}
                                </p>
                            </div>
                    @else
                        <div class="timeline-body">
                           <p>No Violations Noted</p>
                        </div>
                    @endif
                </div>
                <br><br>
            @endforeach
        </div>
    <div>
        <h3>Evaluation Analysis</h3>
        <br>
        <p>
            The application's Heuristic Evaluation revealed numerous violations of Jakob Nielsen's 10 heuristics. The most pressing violations fell under the heuristics of; Consistency and Standards as well as Help and Documentation.
            Other violations were noted, however most of these were viewed as necessary or negligible in the context of the application. Adjustments were made to application in an attempt to correct these issues where possible and further changes will be made in future design iterations.
        </p>
        <h4>See updated Prototype: <a href="{{asset('HiFi_Prototype/HiFi_Prototype_1.1/index.html')}}" target="_blank">HiFi Prototype 1.1</a></h4>
    </div>
@endsection
