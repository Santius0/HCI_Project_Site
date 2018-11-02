@title('Register')
@extends('layouts.small')

@section('small-content')
    {{--if we have github data do login--}}
    @if (session()->has('githubData'))
        {!! Form::open(['route' => 'register.post']) !!}
        @formGroup('name')
            {!! Form::label('name') !!}
            {!! Form::text('name', session('githubData.name'), ['class' => 'form-control', 'required', 'placeholder' => 'John Doe']) !!}
            @error('name')
        @endFormGroup

        @formGroup('email')
            {!! Form::label('email') !!}
            {!! Form::email('email', session('githubData.email'), ['class' => 'form-control', 'required', 'placeholder' => 'john@example.com']) !!}
            @error('email')
        @endFormGroup

        @formGroup('username')
            {!! Form::label('username') !!}
            {!! Form::text('username', session('githubData.username'), ['class' => 'form-control', 'required', 'placeholder' => 'johndoe']) !!}
            @error('username')
        @endFormGroup

        {!! Form('github_id', session('githubData.id')) !!}
        {!! Form::hidden('github_username', session('githubData.username')) !!}
        {!! Form::hidden('password', null) !!}
        {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    @else
        <div>
            <p>Register With Github</p>
            <a href="{{ route('login.github') }}" class="btn btn-default btn-block">
                <i class="fa fa-github"></i> Github
            </a>
        </div>
        <div>
            <p>Register With Email</p>
            <a href="{{ route('register.no-github') }}" class="btn btn-default btn-block">
                <i class="fa fa-register"></i> Register
            </a>
        </div>
    @endif
@endsection
