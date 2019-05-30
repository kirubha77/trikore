@extends('layouts.master')
@section('title')
<title>Testimonials - Trikore</title>
@endsection
@section('content')
<div role="main" class="main">
	
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/testimonals.jpg');width: 100%;

height: 100%;

background-position: bottom;

background-size: cover;">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">TESTIMONALS</h1>
					<span class="sub-title">Words from our clients</span>
				</div>
				<div class="col-md-12 align-self-center order-1">
					<ul class="breadcrumb breadcrumb-light d-block text-center">
						<li><a href="{{ route('index') }}">Home</a></li>
						<li class="active">Clients</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="container py-2">
		<ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
			
		</ul>
		<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
			<div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
				
				<div class="col-md-6 col-lg-3 isotope-item brands">
					<div class="portfolio-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/testimonals/KKT.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">KINCHITKARAM TRUST</span>
								</span>
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item medias">
					<div class="portfolio-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/testimonals/Arthiritis.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">ARTHIRITIS SPECIALITY CLINIC</span>
								</span>
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item logos">
					<div class="portfolio-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/testimonals/Itek.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">ITEK INFOMATIC</span>
								</span>
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item websites">
					<div class="portfolio-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/testimonals/AV-enterprises.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">AV ENTERPRISES</span>
								</span>
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item logos">
					<div class="portfolio-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/testimonals/MOP.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">MOP VAISHNAV COLLEGE FOR WOMEN</span>
								</span>
							</span>
						</span>
					</div>
				</div>
			
			</div>
		</div>
	</div>
	@endsection