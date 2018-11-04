@extends('content.base')
@title($group)

@section('post_body')
    <br/>
    @if(isset($content_thread))
        {{ $content_thread->body() }}
        <br>
    @endif
    @foreach($people as $person)
        @include('users._user_info', ['user' => $person, 'avatarSize' => 250, 'large' => true])
        <br/>
        <hr/>
    @endforeach
@endsection
