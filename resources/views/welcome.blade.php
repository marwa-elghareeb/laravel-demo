@extends('layout.app')


@section('content')



<div class="content-block" id="portfolio">
	<div class="container">
		<header class="block-heading cleafix">
			<a href="{{ URL :: to ('/department') }}" class="btn btn-o btn-lg pull-right">View All</a>


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