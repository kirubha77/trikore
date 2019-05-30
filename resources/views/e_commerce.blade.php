@extends('layouts.master')
@section('title')
<title>E-Commerce Solutions - Trikore</title>
@endsection
@section('content')
<div role="main" class="main">
	
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/e-commerce.jpg');width: 100%;

height: 100%;

background-position: bottom;

background-size: cover;">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">E-Commerce Solutions</h1>
					<span class="sub-title">Let's Build you an Online Store</span>
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
					Lets's Build you an Online Store
					</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10">
				<div class="overflow-hidden">
					<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
						Based on your unique goals and requirements, we deliver custom ecommerce solutions that you will not outgrow. You will get a stable and secure full-featured Ecommerce web solution that has all the bells and whistles you need
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
							<img alt="" class="img-fluid" src="{{ asset('themes/porto/asset/img/services/Ecommerce.png') }}" style="width: 70%;height:auto;">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="overflow-hidden mb-2">
						<h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"> <strong class="font-weight-extra-bold">E-Commerce Solutions</strong></h2>
					</div>
					<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Everybody knows that retail stores are a good business, no matter what you sell; there will always be people near you willing to buy your products or services. But a retail store is limited to its geographical location.</p>
					<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600"> If you want to go global, there are no limits to the internet.We can help you design and develop end-to-end e-commerce solutions to streamline communication, automate workflow, manage high volume transactions, user management and authentication, data and content management, shopping cart applications, and payment gateway integration.</p>
				</div>
			</div>
		</div>
	</section>
	<hr class="solid my-5">
	<div class="container">
		<div id="Magento" class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter" >
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/magento.jpg') }}" alt="layout styles" />
			</div>
			<div class="col-md-8 pl-md-5">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Magento</strong></h2>
				<p class="text-4">Magento is one of the best platform to develop E-Commerce Portal, as a reputed website development company we develop error free and flexible to use E-Commerce Portal in Magento Platform which makes users to buy online without facing any difficulties from the website. Our development team is highly capable in solving critical issues and provide the clear solution.</p>
			</div>
		</div>
		<hr class="solid my-5" >
		<div id="Opencart" class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" >
			<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Open Cart</strong></h2>
				<p class="text-4">Opencart is an online store management system. Our expert Professionals make your dream come true by creating an opencart online store for your shop. Our OpenCart developers retains deep technical information in their respective domains, we provide the best solution to maintain your online business. </p>
				<p class="text-4">E-Commerce business is growing higher than ever in this modern world now, keep with the trends by getting yourself an online store from Trikore Software Solutions (P) Ltd.</p>
			</div>
			<div class="col-md-4 px-5 px-md-3">
				<img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/opencart.jpg') }}" alt="style switcher" />
			</div>
		</div>
		
		<hr class="solid my-5">
		<div id="Woocommerce" class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/woocommerce.png') }}" alt="layout styles" />
			</div>
			<div class="col-md-8 pl-md-5">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Woocommerce</strong></h2>
				<p class="text-4">WooCommerce is a fully customizable, open source ecommerce platform for WordPress. We develop an Ecommerce website in WordPress with WooCommerce which is easy to handle and very user friendly.</p>
				<p class="text-4">We build your Ecommerce portal with all of your products and pour team is always available to add products and maintain your website anytime. As a whole, the website will be outstandingly performing and you will get 100% Satisfaction.</p>
				
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
						<i class="fas fa-chart-bar text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="89" data-append="%">0</strong>
						<label class="text-4 mt-1 text-color-light">GROWTh IN BUSINESS

						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
					<div class="counter">
						<i class="fas fa-signal text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="92" data-append="%">0</strong>
						<label class="text-4 mt-1 text-color-light">INCREASE IN SALES
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
					<div class="counter">
						<i class="icons icon-user-following text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="100" data-append="%">0</strong>
						<label class="text-4 mt-1 text-color-light">STATISFIED CUSTOMERS
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="counter">
						<i class="fas fa-chart-line text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="96" data-append="%">0</strong>
						<label class="text-4 mt-1 text-color-light">INCREASE IN REVENUE
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