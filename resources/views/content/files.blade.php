@extends('content.base')
@title('Project Files')

@section('post_body')
    <br/>
    <h3>All documents and/or files created during this project can be found below.</h3>
    <br>
    <div class="alert alert-info">
        <p>
            Download All Documents <a href="{{ asset('files_and_docs/All_Project_Files_HCI.zip') }}"><b>Here</b></a>
        </p>
    </div>
    <div class="w3-container" id="docs-list">
        <ul id="myUL" class="w3-margin-top w3-margin-bottom">
            @foreach($files as $file)
                <li><a href="{{ $file['link'] }}" target="_blank"> {{$file['name']}} </a> </li>
            @endforeach
        </ul>
    </div>
    <br><hr><br>
    <div class="alert alert-info">
        <p>
            Download All Images <a href="{{ asset('files_and_docs/All_Images_HCI.zip') }}"><b>Here</b></a>
        </p>
    </div>
    <div class="w3-container" id="docs-list">
        <ul id="myUL" class="w3-margin-top w3-margin-bottom">
            @foreach($image_files as $image_file)
                <li><a href="{{ $image_file['link'] }}" target="_blank"> {{$image_file['name']}} </a> </li>
            @endforeach
        </ul>
    </div>
@endsection
