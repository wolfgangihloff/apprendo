@extends('layout')

@section('content')
<?php
$solution = rand (1 ,19 );
$fail = rand (1 ,19 );
while($solution == $fail){
    $fail= rand (1 ,19 );
}

$picture = DB::table('games')->where('id', $solution)->pluck('picture');
$picture_word = DB::table('games')->where('id', $solution)->pluck('name');
$picture_fail = DB::table('games')->where('id', $fail)->pluck('picture');
?>
<div class="container text-center">
<h1>Animal Quiz Game</h1>
<p class="hint">Pick the image matching the word.</p><br>
<p class="animal">{{ $picture_word }}</p>

<p><a href="games/"><img src="{{ $picture }}"></a><a href="games/"><img src="{{ $picture_fail }}"></a></p>
</div>
@stop