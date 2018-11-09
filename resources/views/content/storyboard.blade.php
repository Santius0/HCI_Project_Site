@extends('content.base')
@title('Storyboard and Video Demo')

@section('post_body')
    <h4>Storyboard</h4>
    <p>
        The following is a storyboard depicting...
        <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget porta purus. Nam quam justo, tincidunt in risus semper, dignissim eleifend lacus. Vestibulum nec est mauris. Aliquam facilisis ante a accumsan feugiat. Etiam sit amet sapien eu enim euismod ultrices. Ut in nisl tortor. Donec in augue felis. Nulla vehicula sapien ante, at rhoncus sapien auctor posuere. Sed tempus felis molestie mi fringilla consequat. Donec risus leo, aliquet vitae tellus a, tristique mattis eros. Integer a massa laoreet, aliquam mauris imperdiet, imperdiet sem. Etiam ultrices velit in ante rutrum, scelerisque euismod arcu consectetur. Aenean ultrices ex sit amet sem accumsan, non imperdiet lectus posuere. Maecenas viverra neque sit amet nulla volutpat interdum. Nulla porttitor faucibus ipsum, sed porttitor urna scelerisque efficitur. In hac habitasse platea dictumst.
    </p>
    <table id="miyazaki">
        <caption>Task-Centered System Walkthrough</caption>
        <thead>
        <tr><th>Task Step<th>Knowledgeable?<br>Motivated?<br>Believable<th>Comments/Suggested Fixes
        <tbody>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row['task'] }}
            <td>{{ $row['knowledge'] }}
            <td>{{ $row['comments'] }}
        @endforeach
    </table>
    <br>
    {{--<article class="comic">--}}
        {{--<div class="panel">--}}
            {{--<p class="text top-left">Suddenly...</p>--}}
            {{--<p class="text bottom-right">...something amazing happened</p>--}}
            {{--<p class="text">Storyboard will start here...</p>--}}
        {{--</div>--}}
        {{--<div class="panel">--}}
            {{--<p class="text top-left">Try resizing...</p>--}}
            {{--<p class="text bottom-right">...it's responsive</p>--}}
        {{--</div>--}}
        {{--<div class="panel">--}}
            {{--<p class="speech">A speech bubble</p>--}}
        {{--</div>--}}
        {{--<div class="panel"></div>--}}
        {{--<div class="panel"></div>--}}
        {{--<div class="panel"></div>--}}
        {{--<div class="panel"></div>--}}
        {{--<div class="panel"></div>--}}
        {{--<div class="panel">--}}
            {{--<p class="text bottom-right">THE END</p>--}}
            {{--<p class="text">Storyboard will end here...</p>--}}
        {{--</div>--}}
    {{--</article>--}}
    <br><hr><br>
    <h3>Video Prototype</h3>
    <div class="media">
        <p>The storyboard detailed above is demo'd in the following video</p>
        <div class="media-body" style="text-align: center">
            {!! Embed::make("https://www.youtube.com/watch?v=fB8TyLTD7EE")->parseUrl()->setAttribute(['width' => 1000])->getIframe() !!}
        </div>
    </div>
    <br><hr><br>
    <h3>Major Issues in Task Centered Walkthrough</h3>
    <br>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat elit nibh, in aliquam leo porta at. Donec tellus quam, rhoncus nec venenatis ac, vulputate sed orci. Phasellus non sodales lectus, sit amet interdum augue. Suspendisse at eleifend ligula, euismod porttitor nisl. In lobortis auctor odio non elementum. Ut viverra urna vel tortor euismod condimentum. Pellentesque rutrum leo ut gravida mollis.
        Nunc sit amet bibendum sapien. Sed volutpat lectus volutpat magna malesuada, vel venenatis ipsum tincidunt. Sed ultricies feugiat ipsum id consectetur. In at lorem cursus, eleifend odio tristique, rhoncus justo. Ut bibendum mi vitae velit accumsan, in elementum lacus tristique. Ut a consequat libero. Quisque vestibulum dictum ornare. Sed rutrum ipsum in molestie elementum. Vivamus efficitur, neque ut ornare congue, massa enim convallis turpis, sit amet ullamcorper ex sem non orci.
    </p>
    <br><hr><br>
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
    <br><hr><br>
@endsection