<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{route('index')}}">
											<img alt="Porto"  src="{{ asset('themes/porto/asset/img/logo-tri.png') }}" style="width:75%;height:auto;">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle {{ Route::is('index') ? 'active' : '' }} "
														 href="{{route('index')}}">
															Home
														</a>
													
													</li>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle {{ Route::is('aboutUs') ? 'active' : '' }}" href="{{route('aboutUs')}}">
														
															ABOUT
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle {{ Route::is('services') ? 'active' : '' }}" href="{{ route('services') }}">
															SERVICES
														</a>
			<ul class="dropdown-menu">
				<li class="dropdown-submenu">
					<a class="dropdown-item" href="{{ route('websiteDevelopment') }}">Website Development</a>

					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ url('/website-development#CMS_webdevelopment')}}">CMS</a></li>

						<li><a class="dropdown-item" href="{{ url('/website-development#Wordpress')}}">WordPress</a></li>

						<li><a class="dropdown-item" href="{{ url('/website-development#Joomla')}}">Joomla</a></li>
						
						<li><a class="dropdown-item" href="{{ url('/website-development#Drupal')}}">Drupal</a></li>
						
						<li><a class="dropdown-item" href="{{ url('/website-development#Php-frame-work')}}">Php Framework</a></li>
														
															
					</ul>
				</li>
															
				<li class="dropdown-submenu">
					<a class="dropdown-item" href="{{ route('eCommerce') }}">E-commerce Solutions</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{url('/e-commerce#Magento')}}">Magento</a></li>

						<li><a class="dropdown-item" href="{{url('/e-commerce#Opencart')}}">Open Cart</a></li>

						<li><a class="dropdown-item" href="{{url('/e-commerce#Woocommerce')}}">Woocommerce</a></li>

					</ul>
				</li>
				<li class="dropdown-submenu">
					<a class="dropdown-item" href="{{ route('digital_marketing') }}">Digital Marketing</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{url('/digital-marketing#Social-Media-Management')}}">Social Media Management</a></li>
						<li><a class="dropdown-item" href="{{url('/digital-marketing#Seo')}}">Search Engine Optimization</a></li>
						<li><a class="dropdown-item" href="{{url('/digital-marketing#Email-Marketing')}}">Email Marketing</a></li>
						<li><a class="dropdown-item" href="{{url('/digital-marketing#Google-AdWords')}}">Google AdWords</a></li>
					</ul>
				</li>

			</ul>
		</li>
				<li class="dropdown">
					<a class="dropdown-item dropdown-toggle" href="#">
						CLIENTS
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('portfolio') }}">Portfolio</a></li>
						<li><a class="dropdown-item" href="{{ route('testimonals') }}">Testimonals</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-item dropdown-toggle" href="{{ route('contact_us') }}">
						CONTACT
					</a>
					
				</li>
				
				</ul>
			</nav>
		</div>

			<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
				<i class="fas fa-bars"></i>
			</button>
									</div>
		<div class="header-nav-features order-1 order-lg-2">
			<div class="header-nav-feature header-nav-features-social-icons d-inline-flex">
				<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean ml-0">
					<li class="social-icons-facebook"><a href="https://www.facebook.com/trikore/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
					<li class="social-icons-twitter"><a href="https://twitter.com/trikore" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/trikore" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
					<li class="social-icons-linkedin"><a href="https://www.youtube.com/channel/UCtznhTgEo1gAVqTxQtP4ypg" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</header>