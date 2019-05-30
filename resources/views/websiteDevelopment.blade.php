@extends('layouts.master')
@section('title')
<title>Website Development - Trikore</title>
@endsection
@section('content')
<div role="main" class="main">
	
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/website-development.jpg');width: 100%;

height: 100%;

background-position: bottom;

background-size: cover;">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">Web Development</h1>
					<span class="sub-title">Get a Virtual Identity for your Business</span>
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
					Get  A Virtual Identity For Your Business
					</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10">
				<div class="overflow-hidden">
					<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
						Creating a website is the very first step to introducing your business into the digital world, Our Website Development services includes website design and development, website maintenance and website re-designing.
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
							<img alt="" class="img-fluid" src="{{ asset('themes/porto/asset/img/services/web_development.jpg') }}">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="overflow-hidden mb-2">
						<h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"> <strong class="font-weight-extra-bold">Website Development</strong></h2>
					</div>
					<p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">When the limitations of the packaged CMS or E-commerce solution are standing in the way of the customers agenda we are offering our custom website development option. We have extensive experience developing sites and apps of all types, complexities and budgets.</p>
					<p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">Our approach is to go back to basics and work out what our clients – and their users – actually need to do. We build these from the ground up, using industry standard development frameworks so it’s perfectly tailored to your needs and sustainable in the long term.</p>
				</div>
			</div>
		</div>
	</section>
	<hr class="solid my-5">
	<div class="container">
		<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter" id="CMS_webdevelopment">
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/cms.png') }}" alt="layout styles" />
			</div>
			<div class="col-md-8 pl-md-5">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">CMS Web Development</strong></h2>
				<p class="text-4">If you need to change your website frequently, you should consider a CMS website instead of a static website. A Content Management System (CMS) Website allows for you or your partners/employees to add and edit content on your website from an administrative panel which is secured with a password.</p>
				<p class="text-4">These systems are useful because you do not need HTML training in order to add new pages or to edit or delete content for your site.</p>
			</div>
		</div>
		<hr class="solid my-5" >
		<div id="Wordpress" class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" >
			<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">WordPress</strong></h2>
				<p class="text-4">A CMS, or content management system, is a tool that allows you manage the content of your website independently. WordPress is flexible, highly customizable, super user-friendly, and is a great content management system (CMS).You can use it for blogs, small business websites, and even e-commerce.  </p>
				<p class="text-4">We have highly skilled developers that can bring your site up to date and add that custom touch you always wanted.</p>
			</div>
			<div class="col-md-4 px-5 px-md-3">
				<img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/Wordpress.png') }}" alt="style switcher" />
			</div>
		</div>
		
		<hr class="solid my-5">
		<div id="Joomla" class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/joomla.png') }}" alt="layout styles" />
			</div>
			<div class="col-md-8 pl-md-5">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Joomla</strong></h2>
				<p class="text-4">Joomla is one of the popular platform to build web applications, web portals and websites. We provide custom Joomla development services by user-friendly features, plugins, extensions and latest version of this CMS. </p>
				<p class="text-4"> Joomla allows almost anyone to update and manage websites because of its easy-to-use features and also it is written in PHP for managing content on the website. Joomla is highly used for a website whish needs secure logins.</p>
				
			</div>
		</div>
		<hr class="solid my-5">
		<div id="Drupal" class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
			<div class="col-md-8 pr-md-5 mb-5 mb-md-0">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Drupal</strong></h2>
				<p class="text-4">Drupal is one of the web application in Content Management System which allows user to organize, manage, and publish your content with comfort. Our developers have a vast experience in developing DRUPAL websites.</p>
				<p class="text-4">With Drupal we can develop all type of website such as Drupal Corporate website, Drupal B2B website, Drupal ecommerce website, portal development and Drupal intranet portal.</p>
			</div>
			<div class="col-md-4 px-5 px-md-3">
				<img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/Drupal.png') }}" alt="style switcher" />
			</div>
		</div>
		<hr class="solid my-5">
		<div id="Php-frame-work" class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
			<div class="col-md-4 mb-4 mb-md-0">
				<img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/php-frame-work.png') }}" alt="layout styles" />
			</div>
			<div class="col-md-8 pl-md-5">
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">PHP Framework</strong></h2>
				<p class="text-4">PHP Framework is a basic and popular platform which allows users to develop a web applications. It is one of the advanced framework to use. It saves loads of time, it gets rid of repetitive code and user can develop application fast and secure.Most Popular PHP frameworks are LARAVEL and Code Igniter</p>
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">LARAVEL</strong></h2>
				<p class="text-4">LARAVEL is one of the most advanced, popular and secure framework in PHP framework. It is a framework with expressive and elegance syntax. LARAVEL is the most powerful web application in PHP framework. It is highly secured when compared to other frameworks. Our developers are well trained for LARAVEL and we have proven results.</p>
				<h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">CODEIGNITER</strong></h2>
				<p class="text-4">CODEIGNITER is an open source software. A goal is to develop projects much faster than before by providing rich set of libraries commonly needed tasks, as well as a simple interface and logical structure to access these libraries. We use Code Igniter to finish the project on time with rich technology.</p>
				
			</div>
		</div>
		<hr class="solid my-5">
		
	</div>
	
	<section class="section bg-color-purple section-height-3 border-0 mt-4 mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-10 py-3 mx-md-auto">
					<h1 class="word-rotator  font-weight-bold text-8 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"  >
					<p class="text-white" ><strong>Why Website Development</strong> is Benefical to Your Business?</p>
					</h1>
					<div class="row pt-2 clearfix">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box-icon">
									<i class="icon-user-following icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Higher Sales</h4>
									<p class="mb-4 text-color-light opacity-6">Having a website for your business attract more people and build trust which leads more sales.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter">
								<div class="feature-box-icon">
									<i class="icon-bulb icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Opportunity</h4>
									<p class="mb-4 text-color-light opacity-6">Website gives you an opportunity to prove your credibility and shows your dedication in work.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="feature-box-icon">
									<i class="icon-login icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Accessibility</h4>
									<p class="mb-4 text-color-light opacity-6">Your company doors may close at the end of the day, but your website doesn’t, it opens 24*7</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
								<div class="feature-box-icon">
									{{-- <i class="icon-star icons text-color-light"></i> --}}<i class="fas fa-atlas text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Globally Reach</h4>
									<p class="mb-4 text-color-light opacity-6">Website can be accessed by anyone around the world, your business will gain more popularity.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 reverse appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="icon-clock icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Saves Time and Money</h4>
									<p class="mb-0 text-color-light opacity-6">Having a website itself a step of marketing, it saves you a time and money from giving ads to your business</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
								<div class="feature-box-icon">
									<i class="icon-user-following icons text-color-light"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="mb-2 text-5 text-color-light">Know your Customers</h4>
									<p class="mb-0 text-color-light opacity-6">You will know what customers want from you and their requirements via your website.</p>
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
						<strong class="mt-2 text-color-purple">25%</strong>
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
						<strong class="mt-2 text-color-purple">50%</strong>
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
						<strong class="mt-2 text-color-purple">100%</strong>
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
						<i class="icons icon-screen-desktop text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="500" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">FULL WORKING WEBSITES
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-screen-smartphone text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="200" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">RESPONSIVE WEBSITES
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
					<div class="counter">
						<i class="icons icon-refresh text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="100" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">REDESIGNED WEBSITES
						</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="counter">
						<i class="icons icon-globe text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="150" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">CMS WEBSITES
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
					<label>What Kind of Technology do you Support?	</label>
					<div class="toggle-content">
						<p class="text">We are expertise in custom CSS, Javascript, Flash, PHP, LARAVEL, PHP CODEIGNITER, and HTML. We have very well experienced, talented and innovative developing team to do your work flawlessly.</p>
					</div>
				</section>
				<section class="toggle">
					<label>Can you help me provide content for my website?	</label>
					<div class="toggle-content">
						<p class="text">Yes, we have a separate team for content writing. We will write you a fresh and copyright contents exclusively for your website.</p>
					</div>
				</section>
				<section class="toggle">
					<label>What Platforms do you build your websites on?	</label>
					<div class="toggle-content">
						<p>We build websites in Word press, Joomla, Drupal, Woo-commerce, E-commerce, Magento. We are expertise in all the above platforms and we provide custom solutions to our clients.</p>
					</div>
				</section>
				<section class="toggle">
					<label>Will my website be responsive?	</label>
					<div class="toggle-content">
						<p>Yes, of course. 100% your website will be responsive and all devices ready. Since it’s our first priority to create a website responsive for all the possible devices.</p>
					</div>
				</section>
				<section class="toggle">
					<label>How much does a website cost?</label>
					<div class="toggle-content">
						<p>Website cost may vary depending upon various factors such as the website is static or dynamic, pages of your website, the custom process using in your website, It all depends upon client’s requires.</p>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
@endsection