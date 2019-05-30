@extends('layouts.master')
@section('title')
<title>About us - Trikore</title>
@endsection
@section('content')

<div role="main" class="main">
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/about_us.jpg');width: 100%;

height: 100%;

background-position: bottom;

background-size: cover;">
					<div class="container">
						<div class="row mt-5">
						
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold">About Us</h1>
								<span class="sub-title">The perfect choice for your next project</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="{{ route('index') }}">Home</a></li>
									<li class="active">About US</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row pt-5">
						<div class="col">

							<div class="row text-center pb-5">
								<div class="col-md-9 mx-md-auto">
									<div class="overflow-hidden mb-3">
										<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
											<span>We develop </span>
											<span class="word-rotator-words" style="background: #282a75">
												<b class="is-visible" style="color: white">ingenious</b>
												<b style="color: white">trailblazing</b>
												<b style="color: white">innovative</b>
											</span>
											<span> web applications.
</span>
										</h1>
									</div>
									<div class="overflow-hidden mb-3">
										<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
											We are sharp skilled, young and passionate team of developers with prime focus on developing top class web solutions for you. 
										</p>
									</div>
								</div>
							</div>

							<div class="row mt-3 mb-5">
								<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
									<h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
									<p>We’ve designed our entire process and products around providing everything a small business needs when they’re starting out and ensuring that working with us is always a quick, easy and hassle-free experience. We give our clients full control of their website without a ridiculous price tag.</p>
								</div>
								<div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
									<h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
									<p>Our vision is to develop world class cost effective web and software solutions. We are well competent not only in providing quick services but also we commit with the clients for maintaining and satisfying client’s full requirements. We endeavour to get recognized globally for our best services in Website</p>
								</div>
								<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
									<h3 class="font-weight-bold text-4 mb-2">Why Trikore?</h3>
									<p>We focus strongly on function and usability and train you to manage your website as a business asset. We go to great lengths to assure your content is delivered in such a way that visitors can easily and intuitively find the information they seek, resulting in a pleasant and productive user experience.</p>
								</div>
							</div>

						</div>
					</div>

				</div>

				<section class="section section-primary border-0 mb-0 appear-animation" 	data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
					<div class="container">
						<div class="row counters counters-sm pb-4 pt-3">
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								<div class="counter">
									<i class="icons icon-badge text-color-light"></i>
									<strong class="text-color-light font-weight-extra-bold" data-to="99" data-append="%">0</strong>
									<label class="text-4 mt-1 text-color-light">SATISFIED CUSTOMERS</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
								<div class="counter">
									<i class="icons icon-trophy text-color-light"></i>
									<strong class="text-color-light font-weight-extra-bold" data-to="18">0</strong>
									<label class="text-4 mt-1 text-color-light">WINNING AWARDS</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
								<div class="counter">
									<i class="icons icon-basket-loaded text-color-light"></i>
									<strong class="text-color-light font-weight-extra-bold" data-to="15">0</strong>
									<label class="text-4 mt-1 text-color-light">E-COMMERCE
							</label>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="counter">
									<i class="icons icon-user text-color-light"></i>
									<strong class="text-color-light font-weight-extra-bold" data-to="300">0</strong>
									<label class="text-4 mt-1 text-color-light">HAPPY CLIENTS
								</label>
								</div>
							</div>
						</div>
					</div>
				</section>

				
				<section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
					<div class="container">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
								<p class="pr-5 mr-5">Trikore was founded on the basis of sharp skills, Clear vision and strong values. Trikore has grown in to a sizeable team of passionate professionals developing cutting edge Website Development, E-Commerce Solutions and Digital Marketing. </p>
								<p class="pr-5 mr-5">Trikore strongly believes that all businesses have their unique mission and objectives. Rather than implementing a solution, just because it works well with other companies, we design solutions that are appropriate for our clients, those that will work. Trikore focusses on developing E-Commerce Solutions and always wanted to stay one step ahead in the Web Development market and Digital Marketing world.</p>
							</div>
							<div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 mt-sm-5" style="top: 1.7rem;">
								<img src="{{ asset('themes/porto/asset/img/about-us/who_we_are_26.jpg')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />
								<img src="{{ asset('themes/porto/asset/img/about-us/who_we_are_25.jpg')}}" class="img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" />
								<img src="{{ asset('themes/porto/asset/img/about-us/who_we_are_9.jpg')}}" class="img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" />
							</div>
						</div>
					</div>
				</section>

				<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
					<div class="row pt-5 pb-4 my-5">
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1"><strong class="font-weight-extra-bold">DEVELOPMENT</strong>
							TEAM</h2>
							<p class="lead">As a leading web development company, Trikore has extensive experience in creating high performance front line website development and e-commerce services that will meet your business, industry and/or vertical needs. The service includes Custom Cart Development, Third-Party Application Integration, Payment Gateway Integration, Quality Assurance Testing, Mobile Commerce, and Multi-site Management.</p>
						</div>
						
						<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
							<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1"><strong class="font-weight-extra-bold">Digital Marketing </strong>TEAM</h2>
							<p class="lead">We have a team of dedicated and enthusiastic digital marketing group, our work statics are always unique and successful. We think out of the box to reach your business/company globally in digital world. Our Digital Marketing services includes Social Media Management, Google AdWords, SEO and Email Marketing. Our team is well expertise in what they are doing and the proven results are highly assurance.</p>
						</div>
					</div>
				</div>


				<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
					<div class="container pb-2">
						<div class="row">
							<div class="col-lg-6 text-center text-md-left mb-5 mb-lg-0">
								<h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
								<p class="lead">We have clients all over the world and are very much satisfied with our work.</p>
								<div class="row justify-content-center my-5">
									<div class="col-8 text-center col-md-4">
										<div class="testimonial-author">
										<img src="{{ asset('themes/porto/asset/img/testimonals/velukkudi.jpg') }}" class="img-fluid rounded-circle mb-0" style="width: 50%;height: auto;" alt="">
									</div>
									</div>
									<div class="col-8 text-center col-md-4 my-3 my-md-0">
										<div class="testimonial-author">
										<img src="{{ asset('themes/porto/asset/img/testimonals/afaj.jpg') }}" style="width: 50%;height: auto;" class="img-fluid rounded-circle mb-0" alt="">
									</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
											<div class="testimonial-author">
												<img src="{{ asset('themes/porto/asset/img/testimonals/velukkudi.jpg') }}" class="img-fluid rounded-circle mb-0" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-4 line-height-5 mb-0">This is good news. Congratulations for the good work to all of you in Trikore.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">Velukkudi krishnan</strong><span></span></p>
											</div>
										</div>
									</div>
									<div>
										<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote pl-md-4 mb-0">
											<div class="testimonial-author">
												<img src="{{ asset('themes/porto/asset/img/testimonals/afaj.jpg') }}" class="img-fluid rounded-circle mb-0" alt="">
											</div>
											<blockquote>
												<p class="text-color-dark text-4 line-height-5 mb-0">Thanks for your fast job and support. I&#039;m very much satisfied with the work and online promotion.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">Abdul</strong><span> </span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
 



@endsection