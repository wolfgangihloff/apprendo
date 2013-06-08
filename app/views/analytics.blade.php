@extends('layout')

@section('content')

<div class="container">
	<div class="row">
    	<div class="marketing">
            <hgroup>
                   <h1>Hello teacher!</h1>
                   <h2>Your class performance</h2>
            </hgroup>
        </div>
    	<div class="span6">
        	<div class="marketing">             
                <canvas id="canvas" height="350" width="500"></canvas>
            </div>
        </div>
        <div class="span6">
        	<div class="marketing">
        		<canvas id="canvasBar" height="350" width="500"></canvas>
            </div>
        </div>
     </div>
     
     <div class="row">
     	<div class="span6">
            <div class="marketing">
                    <h2>Praise these students</h2>
                 <div class="row">
                    <div class="span3">
                    Luis
                    </div>
                    <div class="span3">
                    Score: 98
                    </div>
                 </div>
                 <div class="row">
                    <div class="span3">
                    Pepe
                    </div>
                    <div class="span3">
                    Score: 99
                    </div>
                 </div>
                 <div class="row">
                    <div class="span3">
                    Ramon
                    </div>
                    <div class="span3">
                    Score: 97
                    </div>
                 </div>
                    
            </div>
       	</div>
        <div class="span6">
            <div class="marketing">
                    <h2>Tutor these students</h2>
                    <div class="row">
                        <div class="span3">
                        Laura
                        </div>
                        <div class="span3">
                        Score: 25
                        </div>
                 	</div>
                    <div class="row">
                        <div class="span3">
                        Jose
                        </div>
                        <div class="span3">
                        Score: 36
                        </div>
                 	</div>
                    <div class="row">
                        <div class="span3">
                        Pepe
                        </div>
                        <div class="span3">
                        Score: 28
                        </div>
                 	</div>
                 
            </div>
        </div>
        
        
        <!--
        <div class="row">
        	<div class="marketing">
                <div class="span6">
                    Average no. of mistakes: 58
                    <br/>
                    Average completion time: 58 minutes
                </div>
                <div class="span6">
                    Most common mistakes: lion, pig, shark, toad
                </div>
             </div>
        </div>
     -->
     </div>
     
     <hr>
     
     <div class="row">
     	<div class="span6">
            <div class="marketing">
                 <div class="row">
                    <div class="span3">
                    Average no. of mistakes:
                    </div>
                    <div class="span3">
                    58
                    </div>
                 </div>
                 <div class="row">
                    <div class="span3">
                    Average completion time:
                    </div>
                    <div class="span3">
                    25 minutes
                    </div>
                 </div>
            </div>
       	</div>
        <div class="span6">
            <div class="marketing">
                    <div class="row">
                        <div class="span3">
                        Most common mistakes:</div>
                        <div class="span3">
                         lion, pig, shark, toad
                        </div>
                 	</div>
                 
            </div>
        </div>
</div>

<hr>

<div class="row">

</div>

<br/>
<br/>
<br/>
<br/>


<script>

		var lineChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,1)",
					data : [65,59,90,81,56,55,40]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					data : [28,48,40,19,96,27,100]
				}
			]

		}

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
	var myBar = new Chart(document.getElementById("canvasBar").getContext("2d")).Bar(lineChartData);

</script>

@stop