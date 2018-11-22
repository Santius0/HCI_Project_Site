@extends('content.base')
@title('Project Files')

@section('post_body')
    <br/>
    <h3>All documents and/or files created during this project can be found below.</h3>
    <br><hr>
    <div class="w3-container" id="docs-list">
        <ul id="myUL" class="w3-margin-top w3-margin-bottom">
            @foreach($files as $file)
                <li><a href="{{ $file['link'] }}" target="_blank"> {{$file['name']}} </a> </li>
            @endforeach
        </ul>
    </div>
@endsection