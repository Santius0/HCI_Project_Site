@extends('content.base')
@title('Project Files')

@section('post_body')
    <br/>
    <h3>All files created during this project can be found here</h3>
    <br><hr>
    <div class="w3-container" id="docs-list">
        <ul id="myUL" class="w3-margin-top w3-margin-bottom">
            @foreach($files as $file)
                <li><a href="{{ $file['link'] }}"> {{$file['name']}} </a> </li>
            @endforeach
        </ul>
    </div>
@endsection