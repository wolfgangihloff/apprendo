@extends('layout')

@section('content')
<h1>Animal Quiz Game</h1>
{{
  $name = Input::get('answer', 'notset');
  $right_answer = Input::get('name')
}}

@foreach($games as $game)
<p><img src="{{ $game->picture }}" width="300px" height="auto"><img src="/images/cat.jpg" width="300px" height="auto"></p>
@endforeach

{{
   Form::open(array('url' => 'games'));
   echo Form::label('answer', 'Put in your answer');
   echo Form::text('answer');
   echo Form::submit('Submit');
}}
{{ Form::close() }}



@stop