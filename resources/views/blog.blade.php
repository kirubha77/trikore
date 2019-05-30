@extends('layouts.master')
@section('title')
<title>Digital Marketing Agency | Best Digital Marketing Services</title>
@endsection
@section('content')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
	<div class="container">
		<div class="row">
			<div class="col-md-12 align-self-center p-static order-2 text-center">
				<h1 class="text-dark font-weight-bold text-8">Blog</h1>
				<span class="sub-title text-dark">Check out our Latest News!</span>
			</div>
			<div class="col-md-12 align-self-center order-1">
				<ul class="breadcrumb d-block text-center">
					<li><a href="#">Home</a></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="container py-4">
	<div class="row">
		<div class="col-lg-3">
			<aside class="sidebar">
				<form action="" method="get">
					<div class="input-group mb-3 pb-1">
						<input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
						<span class="input-group-append">
							<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
						</span>
					</div>
				</form>
				<h5 class="font-weight-bold pt-4">Categories</h5>
				<ul class="nav nav-list flex-column mb-5">
					<li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
					<li class="nav-item">
						<a class="nav-link active" href="#">Photos (4)</a>
						<ul>
							<li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
							<li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
							<li class="nav-item"><a class="nav-link" href="#">People</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
				</ul>
				<div class="tabs tabs-dark mb-4 pb-2">
					<ul class="nav nav-tabs">
						<li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">Popular</a></li>
						<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Recent</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="popularPosts">
							<ul class="simple-post-list">
								<li>
									<div class="post-image">
										<div class="img-thumbnail img-thumbnail-no-borders d-block">
											<a href="">
												<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="">Nullam Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											Nov 10, 2018
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail img-thumbnail-no-borders d-block">
											<a href="">
												<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="">Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											Nov 10, 2018
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail img-thumbnail-no-borders d-block">
											<a href="">
												<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="">Odiosters Nullam Vitae</a>
										<div class="post-meta">
											Nov 10, 2018
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="tab-pane" id="recentPosts">
							<ul class="simple-post-list">
								<li>
									<div class="post-image">
										<div class="img-thumbnail img-thumbnail-no-borders d-block">
											<a href="">
												<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="">Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											Nov 10, 2018
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail img-thumbnail-no-borders d-block">
											<a href="">
												<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="">Odiosters Nullam Vitae</a>
										<div class="post-meta">
											Nov 10, 2018
										</div>
									</div>
								</li>
								<li>
									<div class="post-image">
										<div class="img-thumbnail img-thumbnail-no-borders d-block">
											<a href="">
												<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
											</a>
										</div>
									</div>
									<div class="post-info">
										<a href="">Nullam Vitae Nibh Un Odiosters</a>
										<div class="post-meta">
											Nov 10, 2018
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<h5 class="font-weight-bold pt-4">About Us</h5>
				<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
			</aside>
		</div>
		<div class="col-lg-9">
			<div class="blog-posts">
				<article class="post post-medium">
					<div class="row mb-3">
						<div class="col-lg-5">
							<div class="post-image">
								<a href="">
									<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
								</a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="post-content">
								<h2 class="font-weight-semibold  text-5 line-height-4 mb-2"><a href="" class="text-purple	">This is a stardard post with preview image</a></h2>
								<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="post-meta">
								<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
								<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
								<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
								<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
								<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-purple text-1 text-uppercase">Read More</a></span>
							</div>
						</div>
					</div>
				</article>
				
				<article class="post post-medium">
					<div class="row mb-3">
						<div class="col-lg-5">
							<div class="post-image">
								<div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}">
									<div>
										<div class="img-thumbnail border-0 p-0 d-block">
											<img class="img-fluid border-radius-0" src="img/blog/medium/blog-24.jpg" alt="">
										</div>
									</div>
									<div>
										<div class="img-thumbnail border-0 p-0 d-block">
											<img class="img-fluid border-radius-0" src="img/blog/medium/blog-20.jpg" alt="">
										</div>
									</div>
									<div>
										<div class="img-thumbnail border-0 p-0 d-block">
											<img class="img-fluid border-radius-0" src="img/blog/medium/blog-21.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="post-content">
								<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="">This is a stardard slider gallery post</a></h2>
								<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="post-meta">
								<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
								<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
								<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
								<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
								<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
							</div>
						</div>
					</div>
				</article>
				
				<article class="post post-medium">
					<div class="row mb-3">
						<div class="col-lg-5">
							<div class="post-image">
								<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
									<div class="row mx-0">
										<div class="col-6 col-md-4 p-0">
											<a href="img/blog/square/blog-13.jpg">
												<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
													<span class="thumb-info-wrapper">
														<img src="img/blog/square/blog-13.jpg" class="img-fluid" alt="" />
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
										<div class="col-6 col-md-4 p-0">
											<a href="img/blog/square/blog-16.jpg">
												<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
													<span class="thumb-info-wrapper">
														<img src="img/blog/square/blog-16.jpg" class="img-fluid" alt="" />
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
										<div class="col-6 col-md-4 p-0">
											<a href="img/blog/square/blog-20.jpg">
												<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
													<span class="thumb-info-wrapper">
														<img src="img/blog/square/blog-20.jpg" class="img-fluid" alt="" />
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
										<div class="col-6 col-md-4 p-0">
											<a href="img/blog/square/blog-23.jpg">
												<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
													<span class="thumb-info-wrapper">
														<img src="img/blog/square/blog-23.jpg" class="img-fluid" alt="" />
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
										<div class="col-6 col-md-4 p-0">
											<a href="img/blog/square/blog-29.jpg">
												<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
													<span class="thumb-info-wrapper">
														<img src="img/blog/square/blog-29.jpg" class="img-fluid" alt="" />
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
										<div class="col-6 col-md-4 p-0">
											<a href="img/blog/square/blog-40.jpg">
												<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
													<span class="thumb-info-wrapper">
														<img src="img/blog/square/blog-40.jpg" class="img-fluid" alt="" />
														<span class="thumb-info-action">
															<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
														</span>
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="post-content">
								<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="">This is a standard image gallery thumbs post</a></h2>
								<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="post-meta">
								<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
								<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
								<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
								<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
								<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
							</div>
						</div>
					</div>
				</article>
				
				<article class="post post-medium">
					<div class="row mb-3">
						<div class="col-lg-5">
							<div class="post-image">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/45830194?color=ffffff&title=0&byline=0&portrait=0&badge=0" width="640" height="360" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="post-content">
								<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="">This is a standard embedded video post</a></h2>
								<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="post-meta">
								<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
								<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
								<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
								<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
								<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
							</div>
						</div>
					</div>
				</article>
				
				<article class="post post-medium">
					<div class="row mb-3">
						<div class="col-lg-5">
							<div class="post-image">
								<div class="embed-responsive embed-responsive-16by9">
									<video class="embed-responsive-item" autoplay="" muted="" loop="" controls="">
										<source src="video/memory-of-a-woman.mp4" type="video/mp4">
									</video>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="post-content">
								<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="">This is a standard HTML5 video post</a></h2>
								<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="post-meta">
								<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
								<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
								<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
								<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
								<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
							</div>
						</div>
					</div>
				</article>
				
				<article class="post post-medium">
					<div class="row mb-3">
						<div class="col-lg-5">
							<div class="post-image">
								<blockquote class="blockquote-primary">
									<p>Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
								<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
							</blockquote>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="post-content">
							<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="">This is a standard blockquote post</a></h2>
							<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="post-meta">
							<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
							<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
							<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
							<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
							<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
						</div>
					</div>
				</div>
			</article>
			
			<article class="post post-medium">
				<div class="row align-items-center mb-3">
					<div class="col-lg-5">
						<div class="post-image">
							<a href="http://www.themeforest.net/" class="d-block btn btn-primary btn-outline border-0 rounded-0 font-weight-bold text-center text-6 p-5" target="_blank">PORTO ON<br> THEMEFOREST</a>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="post-content">
							<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="">This is a standard link post</a></h2>
							<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="post-meta">
							<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
							<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
							<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
							<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
							<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
						</div>
					</div>
				</div>
			</article>
			
			<article class="post post-medium">
				<div class="row mb-3">
					<div class="col-lg-5">
						<div class="post-image">
							<div class="embed-responsive embed-soundcloud embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/341546259&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="post-content">
							<h2 class="font-weight-semibold text-5 line-height-4 mb-2"><a href="">This is a standard audio embedded post</a></h2>
							<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="post-meta">
							<span><i class="far fa-calendar-alt"></i> January 10, 2017 </span>
							<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
							<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
							<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
							<span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
						</div>
					</div>
				</div>
				
			</article>
			<ul class="pagination float-right">
				<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
@endsection