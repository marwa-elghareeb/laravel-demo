@extends('layout.app')


@section('content')
<body>
		<div id="drawer-right">
			<div class="cross text-right">
				<a class="toggleDrawer" href="#"><i class="fa fa-times-circle fa-2x"></i></a>
			</div>
			<h2>Navigate</h2>
			<nav>
				<ul class="nav nav-pills nav-stacked">
					<li>
						<a href="#wrapper"><i class="fa fa-home"></i> Home</a>
					</li>
					<li>
						<a href="#portfolio"><i class="fa fa-bookmark"></i> Portfolio</a>
					</li>
					<li>
						<a href="#services"><i class="fa fa-tasks"></i> Services</a>
					</li>
					<li>
						<a href="#blog"><i class="fa fa-wordpress"></i> Blog</a>
					</li>
					<li>
						<a href="#parallax"><i class="fa fa-heart"></i> Parallax</a>
					</li>
					<li>
						<a href="#testimonials"><i class="fa fa-thumbs-up"></i> Testimonials</a>
					</li>
					<li>
						<a href="#contact"><i class="fa fa-phone-square"></i> Contact</a>
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

			
			<div class="content-block" id="portfolio">
				<div class="container">
					<header class="block-heading cleafix">
						<a href="#" class="btn btn-o btn-lg pull-right">View All</a>
						<h1 style="text-align: center;">Our Companies</h1>
						<p style="text-align: center;">Take a look at some of our recent products</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/rain_1-320x240.jpg)">
									<span class="btn btn-o-white">Lorem Rocks</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/min_icons_thumb1-320x240.jpg)">
									<span class="btn btn-o-white">Lorem Rocks</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/flat_icons_thumb.jpg)">
									<span class="btn btn-o-white">Lorem Rocks</span>
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/wood-320x240.jpg)">
									<span class="btn btn-o-white">Lorem Rocks</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/bike-320x240.jpg)">
									<span class="btn btn-o-white">Lorem Rocks</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="recent-work" style="background-image:url(assets/images/six_1-320x240.jpg)">
									<span class="btn btn-o-white">Lorem Rocks</span>
								</a>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #portfolio -->

            @endsection