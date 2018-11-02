@title('Register')
@extends('layouts.small')

@section('small-content')
    {!! Form::open(['route' => 'register.post']) !!}
    @formGroup('name')
        {!! Form::label('name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'John Doe']) !!}
        @error('name')
    @endFormGroup

    @formGroup('email')
        {!! Form::label('email') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'john@example.com']) !!}
        @error('email')
    @endFormGroup

    @formGroup('username')
        {!! Form::label('username') !!}
        {!! Form::text('username', null, ['class' => 'form-control', 'required', 'placeholder' => 'johndoe']) !!}
        @error('username')
    @endFormGroup

    @formGroup('password')
        {!! Form::label('password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '6 or more characters']) !!}
        @error('password')
    @endFormGroup

    @formGroup('password_confirmation')
        {!! Form::label('confirm password') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required', 'placeholder' => '6 or more characters']) !!}
        @error('password_confirmation')
    @endFormGroup

    <div class="form-group">
        <label>
            {!! Form::checkbox('remember') !!}
            Remember login
        </label>
    </div>
    {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}

    {!! Form::close() !!}
@endsection
