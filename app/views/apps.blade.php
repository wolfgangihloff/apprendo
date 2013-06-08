@extends('layout')

@section('content')

<br>
<div class="container">
    <div class="text-center">
    <p class="lead">Welcome back. You have one unfinished assignment. Keep up the good work.</p>
    <div class="row-fluid text-center">
    <ul class="thumbnails example-sites">
        <li class="span6">
          <img class="img-polaroid" src="img/game2.png">
          <p><b>Get to know the world.</b></p>
          <p><i>Practice your knowledge of the countries of the world, browse around and learn about countries on all continents.</i></p>
          <a href="#" class="btn btn-large btn-primary disabled">Completed</a>
        </li>
        <li class="span6">
            <img src="img/game3.png" class="img-polaroid">
            <p><b>Animal Quiz Game</b></p>
            <p><i>Not all of these animals you have seen before or have you? Check if you can recognize different animals.</i></p>
            <a href="games/" class="btn btn-large btn-primary">Start</a>
        </li>
    </ul>
    </div>

    <div class="row-fluid">
    <ul class="thumbnails example-sites">
        <li class="span6">
           <img class="img-polaroid" src="img/game6.png">
           <p><b>Space numbers</b></p>
           <p><i>While flying through space, you need to stay alert to get all the space math right.</i></p>
           <a href="#" class="btn btn-large btn-primary disabled">Completed</a>
        </li>
        <li class="span6">
            <img class="img-polaroid" src="img/game7.png">
            <p><b>Spelling bee.</b></p>
            <p><i>Who is the next winner of spelling bee? More than 10000 words are randomly selected. Lead the high score.</i></p>
            <a href="#" class="btn btn-large btn-primary disabled">Completed</a>
        </li>
    </ul>
    </div>
</div>
</div>
<br>
<br>
<br>
@stop

