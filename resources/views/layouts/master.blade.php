<!DOCTYPE html>
<html>
{{-- Header --}}
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		@yield('title')
		

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset('themes/porto/asset/img/fav-icon.png') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset('themes/porto/asset/img/apple-touch-icon.png') }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/	css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

			<link rel="stylesheet" href="{{ asset('themes/porto/asset/css/app.css') }}">
		<!-- Head Libs -->
		

	</head>
	<body>
		<div class="body">

{{-- NavBar --}}
@include('layouts.nav')

{{-- content --}}
@yield('content')

{{-- Footer --}}
		<footer id="footer" class="border-0" style="background: url('themes/porto/asset/img/footer/footer_1.jpg'); background-size:cover; background-position: 0 100%;" >
				<div class="container py-4">
					<div class="row justify-content-md-center  mt-3">
						<div class="col-md-4  text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold btext-color-light mb-4">ABOUT US</h5>
							<ul class="list list-unstyled">
								<li class="mb-1"><p class="text-white"style="text-align:justify;">Trikore Software Solutions (P) Ltd founded in 2009,<br> Indian – based company led by young passionate entrepreneurs from Chennai, India; with a prime focus on developing world class cost effective web and software solution.</p></li>
							</ul>
						</div>

						<div class="col-md-4  text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">OUR SERVICES</h5>

							<ul class="list list-unstyled">
								<li class="mb-1"><a href="{{ url('/website-development#CMS_webdevelopment')}}"><span class="text-white" 
							>Content Management Systems</span></a></li>
								<li class="mb-1"><a href="{{ url('/website-development#Wordpress')}}"><span class="text-white" 
							>Wordpress</span></a></li>
								<li class="mb-1"><a href="{{ url('/website-development#Php-frame-work')}}" class="link-hover-style-1"><span class="text-white" 
							>PHP Framework</span></a></li>
								<li class="mb-1"><a href="{{ route('eCommerce') }}" class="link-hover-style-1"><span class="text-white" 
							>E-Commerce Solutions</span></a></li>
								<li class="mb-1"><a href="{{ route('digital_marketing') }}" class="link-hover-style-1"><span class="text-white" 
							>Digital Marketing</span></a></li>
								<li class="mb-1"><a href="{{url('/digital-marketing#Seo')}}" class="link-hover-style-1"><span class="text-white" 
							>Search Engine Optimization</span></a></li>
							</ul>
						</div>
						<div class="col-md-4  text-center text-lg-left mb-5 mb-lg-0">
							<h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">CONTACT DETAILS</h5>
							<ul class="list list-unstyled">
								<li class="mb-1 icon-location-pin icons text-color-tertiary" ><a href="https://www.google.co.in/maps/place/Trikore+Software+Solutions+(P)+Ltd/@12.9897006,80.2473505,17z/data=!3m1!4b1!4m5!3m4!1s0x3a525d8533fe0ce1:0xac48880cc55ac042!8m2!3d12.9897006!4d80.2495392" target="blank" class="link-hover-style-1"><span style="line-height:2.3em;" class="text-white" 
							>&nbsp;TIDEL Park,GF 02,A South No.4,
							Rajiv Gandhi Salai,<br/>&nbsp;&nbsp;&nbsp; Taramani,
							Chennai,
							Tamil Nadu 600113</span></a></li>
								<li class="icon-phone icons text-color-tertiary ml-1"><a href="tel:917601013535" class="link-hover-style-1 footer-text-color"> <span class="text-white">
							&nbsp;Phone: 91-76010-13535</span></a></li>
								<li class="icon-screen-smartphone text-color-tertiary ml-1"><a href="tel:9191763-13535" class="link-hover-style-1">
							<span class="text-white">&nbsp;Mobile: 91- 91763-13535</span></a></li>
								<li class="far fa-envelope text-color-tertiary ml-1"><a href="mailto:info@trikore.in" class="link-hover-style-1"><span class="text-white" 
							>&nbsp;&nbsp;E-Mail: info@trikore.in</span></a></li>
							</ul>
						</div>
					
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
								<p class="text-white">© Copyright 2019. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="{{ asset('themes/porto/asset/js/app.js') }}"></script>

		
	</body>
</html>
