@extends('layout')

@section('content')
<?php
$solution = rand (1 ,19 );
$fail1 = rand (1 ,19 );
$fail2 = rand (1 ,19 );
$fail3 = rand (1 ,19 );
while($solution == $fail1 ){
    $fail1= rand (1 ,19 );
}
while($solution == $fail2 OR $fail1 == $fail2){
    $fail2= rand (1 ,19 );
}
while($solution == $fail3 OR $fail1 == $fail3 OR $fail3 == $fail2){
    $fail3= rand (1 ,19 );
}

$picture = DB::table('games')->where('id', $solution)->pluck('picture');
$picture_word = DB::table('games')->where('id', $solution)->pluck('name');
$picture_fail1 = DB::table('games')->where('id', $fail1)->pluck('picture');
$picture_fail2 = DB::table('games')->where('id', $fail2)->pluck('picture');
$picture_fail3 = DB::table('games')->where('id', $fail3)->pluck('picture');

$picture_elements = array($picture, $picture_fail1, $picture_fail2, $picture_fail3);
shuffle($picture_elements);

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
        <img class="img-polaroid" src="{{ $picture_elements[0] }}">
    </a>
    <a href="games/">
        <img  class="img-polaroid" src="{{ $picture_elements[1] }}">
    </a>
    <a href="games/">
        <img  class="img-polaroid" src="{{ $picture_elements[2]}}">
    </a>
    <a href="games/">
        <img  class="img-polaroid" src="{{ $picture_elements[3] }}">
    </a>
</div>
</div>



@stop