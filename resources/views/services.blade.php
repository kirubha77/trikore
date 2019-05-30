@extends('layouts.master')
@section('title')
<title>Request a Quote - Trikore</title>
@endsection
@section('content')

<div role="main" class="main">
				<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/services.jpg');width: 100%;

height: 100%;

background-position: bottom;

background-size: cover;">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold">Services</h1>
								<span class="sub-title">The perfect choice for your next project</span>
							</div>
							<div class="col-md-12 align-self-center order-1">
								<ul class="breadcrumb breadcrumb-light d-block text-center">
									<li><a href="{{ route('index') }}">Home</a></li>
									<li class="active">Services</li>
								</ul>
							</div>
						</div>
					</div>
				</section>


<div class="container pb-1">

					<div class="row pt-4">
						<div class="col">
							<div class="overflow-hidden mb-3">
								<h2 class="font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
									We Are Here To Help You
								</h2>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-10">
							<div class="overflow-hidden">
								<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
									The Primary purpose of Trikore is to offer service using the latest technologies and trends. The process contains providing IT solutions and building online presence for your products and services.  
								</p>
							</div>
						</div>
						<div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
							<a href="{{ route('request_a_quote') }}" target="_blank"  class="btn btn-modern btn-purple mt-1">Get a Quote!</a>
						</div>
					</div>

</div>

<hr class="solid my-5">
				<div class="container">
					<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/web_development.jpg') }}" alt="layout styles" />
						</div>
						<div class="col-md-8 pl-md-5">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Website Development</strong></h2>
							<p class="text-4">A website is a collection of related web pages, including multimedia content, typically identified with a common domain name, and published on at least one web server.</p>
							<p class="text-4">A website can be a personal website, commercial website for a company, a government website or a no-profit organization website.</p>

							<p class="text-4"><a href="{{ route('websiteDevelopment') }}"target="_blank"><button class="btn btn-modern btn-purple">View More</button> </a></p>

						</div>
					</div>

					<hr class="solid my-5">

					<div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Ecommerce Solutions</strong></h2>
							<p class="text-4">E-commerce is buying and selling of goods and services, or the transmitting of funds or data, over an electronic network, primarily the internet. </p>

							<p class="text-4">These business transactions occur either as business-to-business, business-to-customer, consumer-to-consumer or consumer-to-business. These terms e-commerce and e-business are often used interchangeably.</p>

							<p class="text-4"><a href="{{ route('eCommerce') }}"target="_blank"><button class="btn btn-modern btn-purple">View More</button> </a></p>

						</div>
						<div class="col-md-4 px-5 px-md-3">
							<img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/e-commerce.jpg') }}" alt="style switcher" />
						</div>
					</div>
					

					<hr class="solid my-5">

					<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="col-md-4 mb-4 mb-md-0">
							<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/digital_marketing.jpg') }}" alt="layout styles" />
						</div>
						<div class="col-md-8 pl-md-5">
							<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Digital Marketing</strong></h2>
							<p class="text-4">Digital Marketing refers to the techniques available to business to market, promote and advertise their products, services or brand on the World Wide Web.  </p>

							<p class="text-4">Digital Marketing includes a wide range of marketing elements than traditional business marketing due to the extra channels and marketing mechanisms available on the internet.</p>

							<p class="text-4"><a href="{{ route('digital_marketing') }}"target="_blank"><button class="btn btn-modern btn-purple">View More</button></a> </p>

						</div>
					</div>

					<hr class="solid my-5">

					
</div>
				<div class="container-fluid">
					<div class="row featured-boxes-full featured-boxes-full-scale">
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="far fa-life-ring"></i>
							<h4>Responsive Designs</h4>
							<p class="font-weight-light">We create highly responsive designs in order to keep the users flexible. Our designs are extremely compatible and responsive in all the gadgets/devices.</p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="fab fa-searchengin"></i>
							<h4>SEO Optimization</h4>
							<p class="font-weight-light">SEO may target different kinds of search, including image search, local search, video search, academic search, news search and industry-specific vertical search engines.</p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="fas fa-globe"></i>
							<h4>CMS web Development</h4>
							<p class="font-weight-light">Website allows for you or your partners/employees to add and edit content on your website from an administrative panel which is secured with a password.  </p>
						</div>
						<div class="col-lg-3 featured-box-full featured-box-full-primary">
							<i class="fab fa-magento"></i>
							<h4>Magento</h4>
							<p class="font-weight-light">We use Magento is one of the best platform to develop E-Commerce Portal, as a reputed  company we develop error free and flexible to use E-Commerce Portal.</p>
						</div>
					</div>
				</div>

			<section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-lg-9">
								<div class="call-to-action-content">
									<h2 class="font-weight-normal text-6 mb-0"><strong>Let’s Get Started building your business </strong></h2>
								</div>
							</div>
							<div class="col-md-3 col-lg-3">
								<div class="call-to-action-btn">
									<a href="{{ route('request_a_quote') }}" target="_blank"  class="btn btn-modern btn-purple">Request a quote</a>
								</div>
							</div>
						</div>
					</div>
				</section>	







@endsection