<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Apprendo - Fun and Interactive e-learning marketplace</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />	
    <link href="bootstrap/css/styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="navbar transparent navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="home/"><img src="img/logo_long.png" width="200" height="35"/></a>
      <div class="nav-collapse">
        <ul class="nav ">
          <li><a href="students/">Students</a></li>
          <li><a href="teachers/">Teachers</a></li>
          <li><a href="help/">How it works</a></li>
          <li><a href="pricing/">Pricing</a></li>
        </ul>
        <ul class="nav pull-right">
          <li><a href="#myModal" data-toggle="modal"><i class="icon-home icon-white"></i> Sign in</a></li>
        </ul>
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->

@yield('content')

<script src="bootstrap/js/bootstrap.js"></script>

</body>
</html>
