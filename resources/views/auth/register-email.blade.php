{{--@title('Register')--}}
@php($title = 'Register')

@extends('layouts.small')

@section('small-content')
    {!! Form::open(['route' => 'register.post']) !!}

    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'John Doe']) !!}

    {!! Form::label('email') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'john@example.com']) !!}

    {!! Form::label('username') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'required', 'placeholder' => 'johndoe']) !!}

    {!! Form::label('password') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '6 or more characters']) !!}

    {!! Form::label('confirm password') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'required', 'placeholder' => '6 or more characters']) !!}

    <div class="form-group">
        <label>
            {!! Form::checkbox('remember') !!}
            Remember login
        </label>
    </div>
    {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}

    {!! Form::close() !!}
@endsection
