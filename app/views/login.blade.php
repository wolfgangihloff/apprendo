@extends('layout')

@section('content')

<div class="container">
    <div class="text-center">
        <h1>Login</h1>

        {{ Form::open(array('login', 'POST')) }}

        <!-- username field -->
        <p>
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username', Input::old('username')) }}
        </p>

        <!-- password field -->
        <p>
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </p>

        <!-- submit button -->
        <p>{{ Form::submit('Login') }}</p>

        {{ Form::close() }}
    </div>
</div>

@stop