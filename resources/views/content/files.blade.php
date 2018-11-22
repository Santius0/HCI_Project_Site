@extends('content.base')
@title('Project Files')

@section('post_body')
    <br/>
    <h3>All documents and/or files created during this project can be found below.</h3>
    <br><hr>
    <div class="alert alert-info">
        <p>
            <a href="{{ asset('files_and_docs/All_Project_File_HCI.zip') }}">Download All Files</a>
        </p>
    </div>
    <div class="w3-container" id="docs-list">
        <ul id="myUL" class="w3-margin-top w3-margin-bottom">
            @foreach($files as $file)
                <li><a href="{{ $file['link'] }}" target="_blank"> {{$file['name']}} </a> </li>
            @endforeach
        </ul>
    </div>
@endsection
