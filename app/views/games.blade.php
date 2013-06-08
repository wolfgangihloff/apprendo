@extends('layout')

@section('content')

<h1>Animal Quiz Game</h1>

<p>What is the name?</p><input name="answer" type="text">
@foreach($games as $game)
<p><img src="{{ $game->picture }}" width="300px" height="auto"><img src="/images/cat.jpg" width="300px" height="auto"></p>


@endforeach


@stop