@extends('content.base')
@title($group)

@section('post_body')
    <br/>
    @foreach($people as $person)
        @include('users._user_info', ['user' => $person, 'avatarSize' => 300, 'large' => true])
        <br/>
        <hr/>
    @endforeach
@endsection
