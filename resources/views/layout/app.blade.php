<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<title>Jehat</title>

		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		
		<!-- google fonts -->
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nixie+One:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+SC:regular,italic,bold,bolditalic"/>
		
		<!-- css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css" media="screen"/>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.js"></script>
		<![endif]-->

		<!--[if IE 8]>
	    	<script src="assets/js/selectivizr.js"></script>
	    <![endif]-->
	</head>

		<body>
		<div id="drawer-right">
			<div class="cross text-right">
				<a class="toggleDrawer" ><i class="fa fa-times-circle fa-2x"></i></a>
			</div>
			<h2>Navigate</h2>
			<nav>
				<ul class="nav nav-pills nav-stacked">
					<li>
						<a href="{{  URL :: to ('/') }}"><i class="fa fa-home"></i> Home</a>
					</li>
					<li>
						<a href="{{  URL :: to ('/') }}"><i class="fa fa-bookmark"></i> Companies</a>
					</li>
					<li>
						<a href="#services"><i class="fa fa-tasks"></i> Departments</a>
					</li>
					<li>
						<a href="{{  URL :: to ('/employee') }}"><i class="fa fa-user"></i> Employees</a>
					</li>
				
					
				</ul>
			</nav>
			<div class="social">
				<h2>Stay Connected</h2>
				<ul>
					<li><a href=""><i class="fa fa-facebook-square fa-3x"></i></a></li>
					<li><a href=""><i class="fa fa-twitter-square fa-3x"></i></a></li>
					<li><a href=""><i class="fa fa-tumblr-square fa-3x"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus-square fa-3x"></i></a></li>
				</ul>
			</div>
		</div><!-- #drawer-right -->

		<div id="wrapper"> <!-- Container-->
			
			<div id="header" class="content-block header-wrapper">
				<div class="header-wrapper-inner">
					<section class="top clearfix">
						<div class="pull-left">
							<h1><a class="logo" href="index.html">Jehat</a></h1>
						</div>
						<div class="pull-right">
							<a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a>
						</div>
					</section>
					<section class="center">
						<!--div class="slogan">
							SLIM &amp; STYLISH
						</div>
						<div class="secondary-slogan">
							The Flusk Theme By ThemeWagon.
						</div-->
					</section>
					<section class="bottom">
						<!--a id="scrollToContent" href="#">
							<img src="assets/images/arrow_down.png">
						</a-->
					</section>
				</div>
			</div><!-- header -->

        @yield('content')






    <div class="content-block" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">&copy; Copyright Jehat 2022</div>
						<div class="col-xs-6 text-right">Theme by 
							<a href="#" target="_blank">Jehat</a></div>
					</div>
				</div>
			</div><!-- #footer -->


		</div><!--/#wrapper-->




		<script src="assets/js/jquery-2.1.3.min.js"></script>
		<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.actual.min.js"></script>
		<script src="assets/js/jquery.scrollTo.min.js"></script>
		<script src="assets/js/script.js"></script>

	</body>
</html>



















