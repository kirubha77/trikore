@extends('layouts.master')
@section('title')
<title>Contact Us - Trikore</title>
@endsection
@section('content')

<div role="main" class="main">
				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map mt-0" style="height: 500px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3887.7208018909505!2d80.249539!3d12.989701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac48880cc55ac042!2sTrikore+Software+Solutions+(P)+Ltd!5e0!3m2!1sen!2sin!4v1557987259147!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="container">
					<div class="row py-4">
						<div class="col-lg-6">
							<div class="overflow-hidden mb-1">
							<img src="{{ asset('themes/porto/asset/img/contact-logo.png') }}">
							</div>
							<div class="overflow-hidden mb-4 pb-3">
								<p class="mb-0 appear-animation  text-purple" data-appear-animation="maskUp" data-appear-animation-delay="400">LET’S TALK BUSINESS</p>
							</div>
							<form id="contactForm" class="contact-form" action="{{route('sendMail')}}" method="POST"enctype="multipart/form-data">
												@csrf()

								<div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
								
								<div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
								</div>
								
								<div class="form-row">
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Your Name</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Your Email</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
									</div>
								</div>


								<div class="form-row">
									<div class="form-group col-lg-6">
										<label class="required font-weight-bold text-dark text-2">Your Phone</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="phone_no" id="name" required>
									</div>
									<div class="form-group col-lg-6">
										<label class=" font-weight-bold text-dark text-2">Your Website</label>
										<input type="text" value="" data-msg-required="Please enter your website."maxlength="100"   class="form-control" name="website" id="email" required>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
											<label class=" font-weight-bold text-dark text-2">How can we help you?</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" id="message" required></textarea>

									</div>
								</div>

								<div class="form-row">
									<div class="form-group col">
											<label class="required font-weight-bold text-dark text-2">What is your goal?</label><br>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="WebsiteDevelopment"> Website Development
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="E-CommerceSolutions"> E-Commerce Solutions
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="DigitalMarketing"> Digital Marketing
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="OtherServices"> Other Services
											</label>
										</div>

									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
									<label class="required 	font-weight-bold text-dark">How did you find us?</label>
										<select data-msg-required="Please enter the subject." class="form-control" name="find_us" id="subject" required>
											<option value="">...</option>
											<option value="Google">Google</option>
											<option value="Facebook">Facebook</option>
											<option value="Twitter">Twitter</option>
											<option value="Linkedin">Linkedin</option>
											<option value="Friends">Friends</option>
											<option value="Others">Others</option>	
										</select>

									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send" class="btn btn-purple	 btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>

						<div class="col-lg-6">
							<br><br><br>	
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong><a href="https://goo.gl/maps/yQrxmj23rkiG5pRV6">TIDEL Park, GF 02, A South No. 4, Rajiv Gandhi Salai, Taramani,Chennai, Tamil Nadu 600113</a></li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong><a href="tel:917601013535"> +91-76010-13535</a></li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:info@trikore.in">info@trikore.in</a></li>
								</ul>
							</div>
							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
								<h4 class="pt-5">Business <strong>Hours</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - 9am to 6pm</li>
									<li><i class="far fa-clock top-6"></i> Tuesday - 9am to 6pm</li>
									<li><i class="far fa-clock top-6"></i> Wednesday - 9am to 6pm</li>
									<li><i class="far fa-clock top-6"></i> Thrusday - 9am to 6pm</li>
									<li><i class="far fa-clock top-6"></i> Friday - 9am to 6pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - Closed</li>
									<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
								</ul>
							</div>
								<a href="{{ asset('themes/porto/asset/img/Trikore-Profile.pdf') }}" target="blank"><button class="btn btn-purple btn-block mb-2" >Company Profile</button></a>
						</div>	
					</div>
				</div>
			</div>


@endsection