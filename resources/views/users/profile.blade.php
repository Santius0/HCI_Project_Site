@php($title = $user->name())

@extends('layouts.default')

@section('content')
    <div id="profile">
        @include('users._user_info')
    </div>
@endsection
