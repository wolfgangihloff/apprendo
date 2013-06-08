@extends('layout')

@section('content')
	
<!-- Hero Unit -->
<div class="hero-unit">
  <div class="container" align="center">
    <h2 style="color:#595959"><img src="img/logo_web.png" width="160" height="100" /></h2>
    <h4>
      <p>Web-based "appstore" for interactive e-learning contents with analytics tools for teachers.</p></h4>
      <form class="form-search">
  <div class="input-append">
    <input type="text" id="input"  class="span8" placeholder="e.g. Mathematics games, Physics quiz, Biology, Chemistry" style="background: #fff; border: 3px solid #00B300; height:40px; font-size:25px" autocomplete="off">
  </div>
</form>

<p><img src="img/trend.png" width="25" height="25" /> Trending: <a href="apps/">Animal quiz game</a>, <a href="apps/">Spelling bee</a>, <a href="apps/">Get to know the world</a></p> 

<p>Interactive e-learning marketplace with analytics to track performance.</p>
    <a href="apps/" class="btn2 blue" id="students">Students</a>
    <a href="analytics/" class="btn2 red" id="teachers">Teachers</a>
  </div>
</div>

<div class="container">
        <div class="marketing">
            <h1>Learn by doing. Track their progress.</h1>
            <p class="marketing-byline">This is basically how it works in 3 simple steps.</p>
            <div class="row-fluid" align="center">
            	<div class="span12">
                	<img src="img/homepage-product-screenshot.png" />
                </div>
            </div>
            <hr class="soften">
	            <!--
          <div class="row-fluid" align="center">
            <div class="span4">
              <img class="marketing-img" src="../img/1366692755_search.png" width="128" height="128" />
              <h2>1. Teachers blablabla</h2>
              BLABLBALBALBALSBDSLDNASLDKSALdsa asdfa sfasdfasdfasd
            </div>
            <div class="span4">
              <img class="marketing-img" src="../img/1366692781_mail_receive.png" width="128" height="128" />
              <h2>2. Teachers share knowledge</h2>
            asdfasdlfjasd;lfkjas;dlfkja;sldfkja;sldkfjasd;lj.</div>
            <div class="span4">
              <img class="marketing-img" src="../img/1366692740_user_manage.png" width="128" height="128" />
              <h2>3. Track class performance</h2>
              asdfjasdhflkjah asdfalskdjfhalsd lkjhqewrlkjhasdlkjh</div>
          </div>
          -->
<div class="container">
        <div class="marketing">
          <div class="row-fluid" align="center">
                <div class="span6">
                <!--
                  <img class="marketing-img" src="../img/1366692755_search.png" width="128" height="128" />-->
                  <h2>Students</h2> 
                  <ul id="ul1">
                    <li><img src="img/ico_check.png" width="30" height="30" /> Learn by doing in an interactive way.</li>
                    <li><img src="img/ico_example.png" width="30" height="30" /> Clear goal setting leads students to focus on their task during the class.</li>
                    <li><img src="img/ico_home.png" width="30" height="30" /> Explore new contents and go beyond the scope of the classroom.</li>
                  </ul>
                </div>
                <div class="span6">
                  <h2>Teachers</h2>
                  <ul id="ul1">
                    <li><img src="img/ico_light.png" width="30" height="30" /> Ensure concepts are deeply understood by students.<br />
                    </li>
                    <li><img src="img/ico_love.png" width="30" height="30" /> Monitoring of students performance and tracking their understanding. </li>
                    <li><img src="img/ico_path.png" width="30" height="30" /> Automated tools to ease class organization, achieving a higher efficiency while reducing workload.</li>
                  </ul>
                </div>
           	</div>
            <div class="row-fluid" align="center">
              <div class="span12">
                  <h2>Are you a developer?</h2> 
                
                <p>
                    Develop your web-based interactive content and publish it through Apprendo, make it free or earn money by making it premium.
                 </p>
                 <p>
                   Sign up for our developer program by entering your e-mail:
                 </p>

                     <label for="textfield"></label>
                     <input type="text" name="email" id="email" />
                     <a href="#">Submit </a>
                </div>
              </div>
            </div>
<hr class="soften">

<h1>Featured Apps</h1>
    <p class="marketing-byline">Wanna share your quiz, test, games with other teachers? <a href="http://builtwithbootstrap.tumblr.com/" target="_blank">Share your stuff here</a> or <a href="./getting-started.html#examples">browse what others have shared</a></p>
    
	<div class="row-fluid">
      <ul class="thumbnails example-sites">
        <li class="span3">
          <a class="thumbnail" href="http://soundready.fm/" target="_blank">
          <img src="img/game1.png">
          </a>
        <a href="#">Whatever game uploaded by user1</a></li>
        <li class="span3">
          <a class="thumbnail" href="img/game2.png" target="_blank">
          <img src="img/game2.png">
          </a>
        <a href="#">Whatever quiz</a></li>
        <li class="span3">
          <a class="thumbnail" href="http://www.gathercontent.com/" target="_blank">
          <img src="img/game3.png">
          </a>
          <a href="#">Whatever game</a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.jshint.com/" target="_blank">
          <img src="img/game4.png">
          </a>
          <a href="#">Whatever game</a>
        </li>
      </ul>
     </div>
     <div class="row-fluid">
      <ul class="thumbnails example-sites">
        <li class="span3">
          <a class="thumbnail" href="http://soundready.fm/" target="_blank">
          <img src="img/game5.png">
          </a>
        contact</li>
        <li class="span3">
          <a class="thumbnail" href="http://kippt.com/" target="_blank">
          <img src="img/game6.png">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.gathercontent.com/" target="_blank">
          <img src="img/game7.png">
          </a>
        </li>
        <li class="span3">
          <a class="thumbnail" href="http://www.jshint.com/" target="_blank">
          <img src="img/game8.png">
          </a>
        </li>
      </ul>
     </div>

  </div>
</div>
<br />
<br />
<!-- End Hero Unit -->

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Sign in</h3>
  </div>
  <div class="modal-body">
    <p>Sign in</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Sign in</button>
  </div>
</div>
<!--end Modal-->

@stop