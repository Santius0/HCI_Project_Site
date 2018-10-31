@extends('layouts.small')

@php($title = 'Login')

@section('small-content')
    {!! Form::open(['route' => 'login.post']) !!}

    {!! Form::label('email address') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}

    {!! Form::label('password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}


    <div class="form-group">
        <label>
            {!! Form::checkbox('remember') !!}
            Remember login
        </label>
    </div>

    {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
    <a href="{{ route('login.github') }}" class="btn btn-default btn-block">
        <i class="fa fa-github"></i> Github
    </a>
    {!! Form::close() !!}
@endsection

@section('small-content-after')
    <a href="{{ route('password.forgot') }}" class="btn btn-link btn-sm btn-block">Forgot your password?</a>
@endsection
