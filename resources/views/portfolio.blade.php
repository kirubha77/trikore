@extends('layouts.master')
@section('title')
<title>Portfolio - Trikore</title>
@endsection
@section('content')
<div role="main" class="main">
	
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/portfolio.jpg');width: 100%;

height: 100%;

background-position: bottom;

background-size: cover;">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">PortFolio</h1>
					<span class="sub-title">Our Proven Works</span>
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
			<li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
						<li class="nav-item" data-option-value=".education"><a class="nav-link text-1 text-uppercase" href="#">Education</a></li>
						<li class="nav-item" data-option-value=".construction"><a class="nav-link text-1 text-uppercase" href="#">Construction</a></li>
						<li class="nav-item" data-option-value=".services"><a class="nav-link text-1 text-uppercase" href="#">Services</a></li>
						<li class="nav-item" data-option-value=".ecommerce"><a class="nav-link text-1 text-uppercase" href="#">Ecommerce</a></li>
						<li class="nav-item" data-option-value=".industries"><a class="nav-link text-1 text-uppercase" href="#">Industries</a></li>
						<li class="nav-item" data-option-value=".science"><a class="nav-link text-1 text-uppercase" href="#">Science & Technology</a></li>
						<li class="nav-item" data-option-value=".web"><a class="nav-link text-1 text-uppercase" href="#">Web Application</a></li>
						<li class="nav-item" data-option-value=".hospitality"><a class="nav-link text-1 text-uppercase" href="#">Hospitality</a></li>

		</ul>
		<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
			<div class="row portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
				
				
				<div class="col-md-6 col-lg-3 isotope-item education">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/MOP.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">MOP Vaishnav College</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item ecommerce">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/velukkudi.jpg') }}" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Velukkudi Discourses</span>
									
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item education">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/shasun_jain_college.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Shasun Jain College</span>
									
								</span>
							
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item science">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/nanofold_india.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Nanofold India</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<br/><br/>
				<div class="col-md-6 col-lg-3 isotope-item services">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/flecha_infotech.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Flecha Infotech</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item science">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/syntegrity_labs.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Syntegrity Labs</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item websites">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/aadhil_enterprises.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Aadhil Enterprises</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item construction">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/arch_matrix.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Arch Matrix</span>
								</span>
							
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item services">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/the_afja_group.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">The Afja group</span>
								</span>
							
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item services">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/shribha.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Shribha</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item services">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/arthritis_speciality_clinic.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Arthritis Speciality Clinic</span>
									
								</span>
							
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item ecommerce">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/Al_eid_restuarant.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Al Eid Restuarant</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item ecommerce">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/dukkaann.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Dukkaann</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item services">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/cuting_edge.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Cuting Edge</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item construction">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/disha_parkwest.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Disha Parkwest</span>
									
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item hospitality">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/madurai_travel_club.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Madurai Travel Club</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item services">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/dofflaundry.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Dofflaundry</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item hospitality">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/pearlbeach_hospitality.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Pearlbeach Hospitality</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item web">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/monolith_asia.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Monolith Asia</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item industries">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/pearl_stone.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Pearl Stone</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item industries">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/the_AV_enterprises.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">The AV Enterprises</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item construction">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/dratis_designers.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Cratis Designers</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item industries">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/gem_hvac.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">GEM HVAC</span>
								</span>
								
							</span>
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 isotope-item services">
					<div class="portfolio-item portfolio-top-item">
						<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
							<span class="thumb-info-wrapper border-radius-0">
								<img src="{{ asset('themes/porto/asset/img/portfolio/sms_qatar.jpg') }}" class="img-fluid border-radius-0" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">SMS Qatar</span>
								</span>
								
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item construction">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/ananyaa_homess.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Ananyaa Homess</span>
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item services">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/nswf.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">NSWF</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industries">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/print_U_and_ME.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Print U and ME</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item services">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/saravana_furnishing.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Saravana Furnishing</span>
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industries">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/prism_ndustries.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Prism Industries</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industriesF">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/qube_elevators.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Qube Elevators</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item construction">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/rayan_architects.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Rayan Architects</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item education">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/vanusra.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Vanusra</span>
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item construction">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/versatile_creators.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Versatile Creators</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industries">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/stroke_equipments.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Stroke Equipments</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industries">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/boots_india.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Boots India</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industries">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/glassco.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Glassco</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item construction">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/aarti_homes.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Aarti Homes</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industries">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/nutan_industries.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Nutan Industries</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item services">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/adventure_screens.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Adventure Screens</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item industries">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/light_art.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Light Art</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item services">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/tnhrd.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">TNHRD</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item construction">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/JDLC_housing.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">JDLC Housing</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 isotope-item hospitality">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/sri_sai_residency.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3">Sri Sai Residency</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 isotope-item hospitality">
						<div class="portfolio-item portfolio-top-item">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="{{ asset('themes/porto/asset/img/portfolio/loyola.jpg') }}" class="img-fluid border-radius-0" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner line-height-1 font-weight-bold text-white position-relative top-3"> Loyola College</span>
										
									</span>
									
								</span>
							</span>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		@endsection