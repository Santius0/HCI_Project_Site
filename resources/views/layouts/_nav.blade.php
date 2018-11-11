<nav class="navbar navbar-inverse navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">{{ env('APP_NAME') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ active(['threads', 'thread*']) }}"><a href="{{ route('threads') }}">Updates</a></li>

                {{--<li class="dropdown {{ active(['proposal', 'proposal*']) }}">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project Proposal <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{ route('proposal.concept') }}">Conceptual Design</a></li>--}}
                        {{--<li><a href="{{ route('proposal.definition') }}">Problem Definition</a></li>--}}
                        {{--<li><a href="{{ route('proposal.users') }}">Users and Stakeholders</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li class="dropdown {{ active(['proposal', 'proposal*', 'research', 'research*']) }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project Proposal and Research (A2) <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('proposal.concept') }}">Conceptual Design</a></li>
                        <li><a href="{{ route('proposal.definition') }}">Problem Definition</a></li>
                        <li><a href="{{ route('proposal.users') }}">Users and Stakeholders</a></li>
                        <li><a href="{{ route('research.methods') }}">Research Methods</a></li>
                        <li><a href="{{ route('research.results') }}">Research Results</a></li>
                    </ul>
                </li>

                <li class="dropdown {{ active(['prototype', 'prototype*']) }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Design Sketches and Prototype Demo (A3) <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('prototype.sketches') }}">Design Sketches</a></li>
                        <li><a href="{{ route('prototype') }}">LoFi Prototype</a></li>
                        <li><a href="{{ route('prototype.storyboard') }}">Storyboard and Demo</a></li>
                    </ul>
                </li>


                {{--<li class="dropdown {{ active(['research', 'research*']) }}">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Research <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{ route('research.methods') }}">Research Methods</a></li>--}}
                        {{--<li><a href="{{ route('research.results') }}">Research Results</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                {{--<li class="dropdown {{ active(['prototype', 'prototype*']) }}">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Application Design <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href="{{ route('prototype') }}">LoFi Prototype</a></li>--}}
                        {{--<li><a href="{{ route('prototype.timeline') }}">Application Timeline</a></li>--}}
                        {{--<li><a href="{{ route('prototype.storyboard') }}">Storyboard Demo</a></li>--}}
                        {{--<li><a href="{{ route('prototype.sketches') }}">Design Sketches</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li class="dropdown {{ active(['people', 'people*']) }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">People <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('people.devs') }}">Development Team</a></li>
                        <li><a href="{{ route('people.users') }}">Test Users</a></li>
                    </ul>
                </li>

                <li class="dropdown {{ active(['files', 'files*']) }}"><a href="{{ route('files') }}">Files</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ active('login') }}"><a href="{{ route('login') }}">Login</a></li>
                    <li class="{{ active('register') }}"><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile-image" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <img class="img-circle" src="{{ Auth::user()->gravatarUrl(60) }}" width="30"> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <span>
                                    <strong>{{ Auth::user()->name() }}</strong><br>
                                    {{ '@'.Auth::user()->username() }}
                                </span>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="{{ active('profile') }}"><a href="{{ route('profile', Auth::user()->username()) }}"><i class="fa fa-user-circle-o dropdown-icon" aria-hidden="true"></i>Profile</a></li>
                            {{--<li class="{{ active('dashboard') }}"><a href="{{ route('dashboard') }}"><i class="fa fa-home dropdown-icon" aria-hidden="true"></i>Dashboard</a></li>--}}
                            {{--<li class="{{ active('settings.*') }}"><a href="{{ route('settings.profile') }}"> <i class="fa fa-cog dropdown-icon" aria-hidden="true"></i>Settings</a></li>--}}
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out dropdown-icon" aria-hidden="true"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
