@extends('content.base')
@title('Storyboard and Video Demo')

@section('post_body')
    <div id="storyboard">
        <p>
            The following is a storyboard depicting a situation where all classes in the Faculty of Science and Technology's main building have been cancelled due to a gas leak at the Cariri Caribbean Research Institute. Classes from the other departments that would be hosted in FST's main building are being temporarily relocated.
        </p>
    <article class="comic">
        @foreach($panels as $panel)
            <div class="panel">
                <img src="{{ $panel['image'] }}" name="{{ $panel['name'] }}">
            </div>
        @endforeach
    </article>
    </div>
    <br><hr>
    <div id="video">
        <h3>Video Prototype</h3>
        <div class="media">
            <p>The storyboard detailed above is demo'd in the following video</p>
            <div class="media-body" style="text-align: center">
                {!! Embed::make("https://www.youtube.com/watch?v=NpEaa2P7qZI")->parseUrl()->setAttribute(['width' => 1000])->getIframe() !!}
            </div>
        </div>
    </div>
    <br><hr>
    <div id="walkthrough">
        <p>Based on the storyboard and video demo shown above, the following task centered walkthough was done.</p>
        <br>
        <table id="miyazaki">
            <caption>Task-Centered System Walkthrough</caption>
            <thead>
            <tr><th>Task Step<th>Knowledgeable?<br>Motivated?<br>Believable?<th>Comments/Suggested Fixes
            <tbody>
            @foreach($rows as $row)
                <tr>
                    <td>{{ $row['task'] }}
                    <td>{{ $row['knowledge'] }}
                    <td>{{ $row['comments'] }}
            @endforeach
        </table>
    </div>
    <div id="walkthrough-issues">
        <h3>Major Issues in Task Centered Walkthrough</h3>
        <br>
        <p>
            <ul>
                <li>
                    User may not be able to quickly and easily identify Alerts which require immediate attention.
                    <ul>
                        <li> The colour scheme and layout for all newsfeed item types should be different.</li>
                        Solution:  Alerts should have a distinct colour that call attention towards them, such as a bright red.
                    </ul>
                </li>
                <li>
                    User could not ascertain all necessary information without viewing further details.
                    <ul>
                        <li>The newsfeed item’s summary of events was insufficient to communicate all pertinent information to the user quickly.</li>
                        Solution: Article excerpts will be updated to include only the core details of the article.
                    </ul>
                </li>
                <li>
                    User was unable to easily obtain updates on the situation.
                    <ul>
                        <li>There is currently no means for user to quickly and easily obtain updates on existing alerts and/or announcements.</li>
                        Solution: Implement article updates so users can easily track the status of previous alerts and/or announcements.
                    </ul>
                </li>
            </ul>
        </p>
        <br><hr>
    </div>
    <div id="reflection">
        <h3>Reflection</h3>
        <p>
          Though the application's aesthetics are important, its main purpose is the delivery and collection of information. As a result, users must be able to quickly identify the type of information presented, as well as the most important content of that information. We focused on functionality and usability for our prototypes's design, however more work is needed when is comes to the clarity and immediate readability of the information presented. This is especially important when dealing with emergency situations such as the one presented in the storyboard and demo above.
        </p>
    </div>
    <br><hr>
    <div id="brainstorming">
        <h3>Brainstorming and Sketching Session</h3>
        <div class="text-center image-box">
            <div class="row">
                <div class="flex-column">
                    <img src="{{ asset('images/Brainstorm/1.jpg') }}" title='1'>
                </div>
                <br>
                <div class="flex-column">
                    <img src="{{ asset('images/Brainstorm/2.jpg') }}" title='4'>
                </div>
            </div>
        </div>
    </div>
@endsection