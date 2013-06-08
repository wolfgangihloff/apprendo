@extends('layout')

@section('content')
<script>
    onclick="$.cookie('clicks', $.cookie('clicks') + 1);"
</script>

<?php
$solution = rand (1 ,19 );
$fail1 = rand (1 ,19 );
$fail2 = rand (1 ,19 );
$fail3 = rand (1 ,19 );
while($solution == $fail1 ){
    $fail1= rand (1 ,19 );
}
while($solution == $fail2){
    $fail2= rand (1 ,19 );
}
while($solution == $fail3){
    $fail3= rand (1 ,19 );
}

$picture = DB::table('games')->where('id', $solution)->pluck('picture');
$picture_word = DB::table('games')->where('id', $solution)->pluck('name');
$picture_fail1 = DB::table('games')->where('id', $fail1)->pluck('picture');
$picture_fail2 = DB::table('games')->where('id', $fail2)->pluck('picture');
$picture_fail3 = DB::table('games')->where('id', $fail3)->pluck('picture');
?>
<div class="container text-center">
<h1>Animal Quiz</h1>
    <br>
    <br>
<p class="hint">Pick the image matching the word <b>{{ $picture_word }}</b></p><br>
<br>
<br>
<div>
    <a href="games/">
        <img class="img-polaroid" src="{{ $picture }}">
    </a>
    <a href="games/">
        <img  class="img-polaroid" src="{{ $picture_fail1 }}">
    </a>
    <a href="games/">
        <img  class="img-polaroid" src="{{ $picture_fail2 }}">
    </a>
    <a href="games/">
        <img  class="img-polaroid" src="{{ $picture_fail3 }}">
    </a>
</div>
</div>

@stop