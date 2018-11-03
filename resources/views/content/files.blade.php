@extends('content.base')
@title('Project Files')

@section('post_body')
    <br/>
    <h3>All files created during this project can be found here</h3>
    <br><hr>
    @foreach($files as $file)
        <ul class="docs-list">
            <li>
                <div class="img">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                  </span>
                </div>
                <div class="desc">
                    <strong> {{ isset($file['name']) ? $file['name'] : 'File Name' }} </strong>
                    <small> {{ isset($file['description']) ? $file['description'] : '' }}</small>
                </div>
            </li>
        </ul>
    @endforeach
@endsection