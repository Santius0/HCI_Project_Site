@extends('content.base')
@title('Project Files')

@section('post_body')
    <br/>
    <h3>All files created during this project can be found here</h3>
    <br><hr>
    @foreach($files as $file)
        <ul>
            <li><a href="{{ $file['link'] }}">{{$file['name']}}</a> </li>
        </ul>
    @endforeach
@endsection