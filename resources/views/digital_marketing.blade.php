@extends('layouts.master')
@section('title')
<title>Digital Marketing Agency | Best Digital Marketing Services</title>
@endsection
@section('content')
<div role="main" class="main">
	
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/digital_marketing.jpg');width: 100%;

height: 100%;

background-position: bottom;

background-size: cover;">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">Digital Marketing</h1>
					<span class="sub-title">Take your Business to the Next Level</span>
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
					Take your Business to the Next Level
					</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10">
				<div class="overflow-hidden">
					<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
						Digital marketing connects organizations with qualified potential customers and takes business development to a much higher level than traditional marketing/advertising. We follow three strategies to get our result which are PULL strategy, PUSH strategy and FOLLOW-UP strategy.
					</p>
				</div>
			</div>
			<div class="col-lg-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
				<a href="{{ route('request_a_quote') }}" target="_blank" class="btn btn-modern btn-purple mt-1">Get a Quote!</a>
			</div>
		</div>
	</div>
	<section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
		<div class="container py-4">
			<div class="row align-items-center">
				<div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
					<div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
						<div>
							<video style="width: 80%;height:auto;" controls>
							<source   src="{{ asset('themes/porto/asset/img/services/digital-marketing_video.mp4') }}" type="video/mp4" >
							</video>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="overflow-hidden mb-2">
						<h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"> <strong class="font-weight-extra-bold">Digital Marketing</strong></h2>
					</div>
					<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Digital Marketing is also known as internet marketing, web marketing, online marketing and search engine marketing. A powerful tool of communication, digital medium allows companies to reach their customers where they are, while also characterizing their brands and expanding their customer base.</p>
					<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Digital Marketing can also increase the efficacy of other marketing techniques – including SEO and SEM – by helping build natural links, and drive traffic, awareness, brand recognition and goodwill. If you have been struggling with social media strategy, management, or advertising we can help.</p>
				</div>
			</div>
		</div>
	</section>
	<hr class="solid my-5">
	<div class="container">
		<div id="Social-Media-Management" class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter" >
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/social-media-management-1.jpg') }}" alt="layout styles" />
			</div>
			<div class="col-md-8 pl-md-5">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Social Media Management</strong></h2>
				<p class="text-4">Social media marketing, or SMM, is a form of internet marketing that implements various social media networks in order to achieve marketing communication and branding goals. Social media marketing primarily covers activities involving social sharing of content, videos, and images for marketing purposes, as well as paid social media advertising.Our social media advertising services are proven to accelerate growth.</p>
			</div>
		</div>
		<hr class="solid my-5" >
		<div id="Seo" class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" >
			<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Search Engine Optimization</strong></h2>
				<p class="text-4">SEO is the process of affecting the visibility of a website or a web page in a search engine’s unpaid results—often referred to as “natural,” “organic,” or “earned” results. In general, the earlier (or higher ranked on the search results page), and more frequently a site appears in the search results list, the more visitors it will receive from the search engine’s users. SEO may target different kinds of search, including image search, local search, video search, academic search, news search and industry-specific vertical search engines.</p>
			</div>
			<div class="col-md-4 px-5 px-md-3">
				<img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/seo.jpg') }}" alt="style switcher" />
			</div>
		</div>
		
		<hr class="solid my-5">
		<div id="Email-Marketing" class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/email-marketing-1.jpg') }}" alt="layout styles" />
			</div>
			<div class="col-md-8 pl-md-5">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Email Marketing</strong></h2>
				<p class="text-4">Email marketing is directly marketing a commercial message to a group of people using email. In its broadest sense, every email sent to a potential or current customer could be considered email marketing. It usually involves using email to send ads, request business, or solicit sales or donations, and is meant to build loyalty, trust, or brand awareness.Our marketing automation experts will help you grow your sales and convert more leads, all while saving you time, money and headache.</p>
				
			</div>
		</div>
		
		<hr class="solid my-5">

		<div id="Google-AdWords" class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" >
			<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Google AdWords(Pay per click)</strong></h2>
				<p class="text-4">Google AdWords is Google’s advertising program, also known as PPC (Pay per Click), a model of internet marketing in which advertisers pay a fee each time one of their ads is clicked. Essentially, it’s a way of buying visits to your site, rather than attempting to “earn” those visits organically.It allows advertisers to bid for ad placement in a search engine’s sponsored links when someone searches on a keyword that is related to their business offering.</p>
			</div>
			<div class="col-md-4 px-5 px-md-3">
				<img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/google_adwords-1.jpg') }}" alt="style switcher" />
			</div>
		</div>

		<hr class="solid my-5">
		
	</div>
	
	<section class="section bg-color-purple section-height-3 border-0 mt-4 mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-10 py-3 mx-md-auto">
					<h1 class="word-rotator textcenter slide font-weight-bold text-8 mb-4 appear-animation" data-appear-animation="fadeInUpShorter">
					<p class="text-white">Why E-Commerce is Beneficial to Your Business</p>
					</h1>
					<div class="row pt-2 clearfix">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box-icon">
									<i class="fas fa-sort-amount-down text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Decrease Costs</h4>
									<p class="mb-4 text-color-light opacity-6">You can eliminate advertising & marketing costs, personnel and travel costs.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
								<div class="feature-box-icon">
									<i class="fas fa-history text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Open 24*7</h4>
									<p class="mb-4 text-color-light opacity-6">Your online store will be open 24*7 and people can buy your product anytime.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="feature-box-icon">
									<i class="icon-briefcase icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Competence</h4>
									<p class="mb-4 text-color-light opacity-6">For effective business transactions, e-commerce is an efficient and competent.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="feature-box-icon">
									{{-- <i class="icon-star icons text-color-light"></i> --}}<i class="icon-people icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Attract More Customers</h4>
									<p class="mb-4 text-color-light opacity-6">With right marketing, you can attract more customers globally.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="fa fa-store text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Convenience</h4>
									<p class="mb-0 text-color-light opacity-6">Most of the people prefer E-Commerce because of its convenience and comfort.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="icon-basket-loaded
									icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Accessibility</h4>
									<p class="mb-0 text-color-light opacity-6">Buyers can permitted to purchase goods or services from their home at any time.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row justify-content-center pt-4 mt-5 mb-5">
			<div class="col-lg-8 text-center">
				<div class="overflow-hidden mb-3">
					<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp">Learn more about our process</h2>
				</div>
				<div class="overflow-hidden mb-3">
					<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Stand out concepts, updated technologies and customer satisfaction is the key to deliver a successful project. Our approach may look very simple but the process is unique.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center pb-5">
			<div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
				<div class="circular-bar mb-lg-5 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
					<div class="circular-bar-chart" data-percent="25" data-plugin-options="{'barColor': '#282a75'}">
						<strong class="mt-2 text-color-primary">25%</strong>
					</div>
				</div>
				<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
					<h4 class="font-weight-bold">Content Gathering</h4>
					<p class="px-3">We initiate the project by content gathering. We make sure that we understood the client’s requirements meticulously</p>
				</div>
			</div>
			<div class="col-md-7 col-lg-4 mb-5 mb-lg-0">
				<div class="circular-bar mb-lg-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
					<div class="circular-bar-chart" data-percent="50" data-plugin-options="{'barColor': '#282a75'}">
						<strong class="mt-2 text-color-primary">50%</strong>
					</div>
				</div>
				<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
					<h4 class="font-weight-bold">Execute</h4>
					<p class="px-3">Our ardent team of dedicated developers will be working according to the project schedule and requirements.</p>
				</div>
			</div>
			<div class="col-md-7 col-lg-4">
				<div class="circular-bar mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
					<div class="circular-bar-chart" data-percent="100" data-plugin-options="{'barColor': '#282a75'}">
						<strong class="mt-2 text-color-primary">100%</strong>
					</div>
				</div>
				<div class="col text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
					<h4 class="font-weight-bold">Delivery</h4>
					<p class="px-3">Once the process confirmed by the client, we deliver the flawless and impeccable product on time and happy to assist further.</p>
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
						<i class="icons icon-key text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="6" data-append="X">0</strong>
						<label class="text-4 mt-1 text-color-light">GROWTH IN KEYWORD RANKING	
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-globe-alt text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="98" data-append="%">0</strong>
						<label class="text-4 mt-1 text-color-light">INCREASE IN SOCIAL MEDIA FOLLOWERS
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
					<div class="counter">
						<i class="icons icon-rocket text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="95" data-append="%">0</strong>
						<label class="text-4 mt-1 text-color-light">INCREASE IN TOP 10 RANKING
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="counter">
						<i class="icons icon-hourglass text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="92" data-append="%">0</strong>
						<label class="text-4 mt-1 text-color-light">INCREASE IN VISIT DURATION
						</label>
					</div>
				</div>
			</div>
		</div>
	</section>

<div class="container py-4">
	<div class="row">
		<div class="col">
			<h1 class="font-weight-normal textcenter text-7 mb-2">Frequently Asked <strong class="font-weight-extra-bold">Questions</strong></h1>
			<div class="toggle toggle-primary" data-plugin-toggle 			data-plugin-options="{ 'isAccordion': true }">
				<section class="toggle active">
					<label>Do you Build E-Commerce websites?</label>
					<div class="toggle-content">
						<p class="text">Yes, we build E-Commerce websites. We provide E-Commerce solutions for your business. We take care for everything such as website creation, shopping cart, Payment portal and website hosting..</p>
					</div>
				</section>
				<section class="toggle">
					<label>Can I Edit products and Description?</label>
					<div class="toggle-content">
						<p class="text">Yes, you can add and edit the product pricing and description with ease.</p>
					</div>
				</section>
				<section class="toggle">
					<label>Can I get Sales report from my E-Commerce website?</label>
					<div class="toggle-content">
						<p>Yes, you can get sales report that can be exported to spreadsheet form.</p>
					</div>
				</section>
				<section class="toggle">
					<label>Will payment processing system secure enough?	</label>
					<div class="toggle-content">
						<p>Yes, we develop your ecommerce payment system very safe and secure checkout with 128-bit SSL encryption. Integration with PayPal and over 50 other payment gateways available.</p>
					</div>
				</section>
				<section class="toggle">
					<label>Can I have Shopping Cart?</label>
					<div class="toggle-content">
						<p>Yes, you will have online shopping cart that visitors can add products to and modify.</p>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
@endsection