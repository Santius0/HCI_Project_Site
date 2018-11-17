@extends('content.base')
@title('Vertical Prototype')

@section('post_body')
    <br/>
    <h3>See <a href="{{asset('Prototype/index.html')}}" target="_blank">HiFi Demo</a> </h3><hr><br>
    <h3>Vertical Prototype</h3>
    <div class="tree">
        <ul>
            <li>
                <a href="#">Parent</a>
                <ul>
                    <li>
                        <a href="#">Child</a>
                        <ul>
                            <li>
                                <a href="#">Grand Child</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Child</a>
                        <ul>
                            <li><a href="#">Grand Child</a></li>
                            <li>
                                <a href="#">Grand Child</a>
                                <ul>
                                    <li>
                                        <a href="#">Great Grand Child</a>
                                    </li>
                                    <li>
                                        <a href="#">Great Grand Child</a>
                                    </li>
                                    <li>
                                        <a href="#">Great Grand Child</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">Grand Child</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
@endsection