@extends('layout')

@section('content')
<?php
$solution = rand (1 ,19 );
$fail = rand (1 ,19 );
$fail++;

$picture = DB::table('games')->where('id', $solution)->pluck('picture');
$picture_word = DB::table('games')->where('id', $solution)->pluck('name');
$picture_fail = DB::table('games')->where('id', $fail)->pluck('picture');
?>

<h1>Animal Quiz Game</h1>

<p>{{ $picture_word }}</p>
<p><a href="games/"><img src="{{ $picture }}"></a><a href="games/"><img src="{{ $picture_fail }}"></a></p>

@stop