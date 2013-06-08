@extends('layout')

@section('content')

<div class="container">
	<div class="row">
   	  <div class="marketing">
            <hgroup>
                   <h1>{{ Auth::user()->username}}</h1>
                   <h2>This is your class performance for Group Year 7</h2>
            </hgroup>
        	<a href="#"><i class="icon-user"></i>Add Student</a> <a href="#"> <i class="icon-th-list"></i>Create New Group </a>
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
                    58/100</div>
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
      	<div class="marketing">
                <h2>My students</h2>
                <div class="span4">
                    <strong>Name</strong>
                </div>
                <div class="span2">
                    <strong>Last Score</strong>
                </div>
                <div class="span2">
                    <strong>Previous Score</strong>
                </div>
                <div class="span2">
                    <strong>Change</strong>
                </div>
                <div class="span2">
                    <strong>Evolution</strong>
                </div>
            </div>
    	</div> 
        <div class="row">
            	<div class="marketing">
                    <div class="span4">
                        Luis
                    </div>
                    <div class="span2">
                        88
                    </div>
                    <div class="span2">
                        85
                    </div>
                    <div class="span2">
                        10%
                    </div>
                    <div class="span2">
                        Click
                    </div>
                </div>
          </div> 
        <div class="row">
            	<div class="marketing">
                    <div class="span4">
                        Luis
                    </div>
                    <div class="span2">
                        88
                    </div>
                    <div class="span2">
                        85
                    </div>
                    <div class="span2">
                        10%
                    </div>
                    <div class="span2">
                        Click
                    </div>
                </div>
          </div> 
          <div class="row">
            	<div class="marketing">
                    <div class="span4">
                        Luis
                    </div>
                    <div class="span2">
                        88
                    </div>
                    <div class="span2">
                        85
                    </div>
                    <div class="span2">
                        10%
                    </div>
                    <div class="span2">
                        Click
                    </div>
                </div>
          </div> 
          <div class="row">
            	<div class="marketing">
                    <div class="span4">
                        Luis
                    </div>
                    <div class="span2">
                        88
                    </div>
                    <div class="span2">
                        85
                    </div>
                    <div class="span2">
                        10%
                    </div>
                    <div class="span2">
                        Click
                    </div>
                </div>
          </div> 
          <div class="row">
            	<div class="marketing">
                    <div class="span4">
                        Luis
                    </div>
                    <div class="span2">
                        88
                    </div>
                    <div class="span2">
                        85
                    </div>
                    <div class="span2">
                        10%
                    </div>
                    <div class="span2">
                        Click
                    </div>
                </div>
          </div> 
          <div class="row">
            	<div class="marketing">
                    <div class="span4">
                        Luis
                    </div>
                    <div class="span2">
                        88
                    </div>
                    <div class="span2">
                        85
                    </div>
                    <div class="span2">
                        10%
                    </div>
                    <div class="span2">
                        Click
                    </div>
                </div>
          </div> 
          <div class="row">
            	<div class="marketing">
                    <div class="span4">
                        Luis
                    </div>
                    <div class="span2">
                        88
                    </div>
                    <div class="span2">
                        85
                    </div>
                    <div class="span2">
                        10%
                    </div>
                    <div class="span2">
                        Click
                    </div>
                </div>
          </div> 
          
			<hr>

			<div class="row-fluid">
            	<div class="marketing">
            		<h2>My Apps</h2>

              <ul class="thumbnails example-sites">
                <li class="span3">
                  <a class="thumbnail" href="http://soundready.fm/" target="_blank">
                  <img src="img/game1.png">
                  </a>
                <a href="#">Average score 80%</a></li>
                <li class="span3">
                  <a class="thumbnail" href="img/game2.png" target="_blank">
                  <img src="img/game2.png">
                  </a>
                <a href="#">Average score 60%</a></li>
                <li class="span3">
                  <a class="thumbnail" href="http://www.gathercontent.com/" target="_blank">
                  <img src="img/game3.png">
                  </a>
                  <a href="#">Average score 90%</a>
                </li>
                <li class="span3">
                  <a class="thumbnail" href="http://www.jshint.com/" target="_blank">
                  <img src="img/game4.png">
                  </a>
                  <a href="#">Average score 100%</a>
                </li>
              </ul>
             </div>
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