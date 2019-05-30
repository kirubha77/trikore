@extends('layouts.master')
@section('title')
<title>Digital Marketing Agency | Best Digital Marketing Services</title>
@endsection
@section('content')
<div role="main" class="main">
	<section class="page-header page-header-modern page-header-background page-header-background-md overlay  overlay-show overlay-op-7" style="background-image: url('themes/porto/asset/img/banner/request_a_quote.jpg');    background-position: center;
    background-size: cover;
}">
		<div class="container">
			<div class="row mt-5">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="text-9 font-weight-bold">Request a Quote</h1>
					<span class="sub-title">Get Your Quote Now</span>
				</div>
				<div class="col-md-12 align-self-center order-1">
					<ul class="breadcrumb breadcrumb-light d-block text-center">
						<li  class="active"><a href="{{ route('index') }}">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class="overflow-hidden mb-1">
				<h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">Please complete the form</strong> Us</h2>
			</div>
			<div class="overflow-hidden mb-4 pb-3">
				<p class="mb-0">Please complete the form to receive a FREE Quotation for our Services. We will reply as soon as possible.

</p>
			</div>
			<form action="{{route('sendQuoteMail')}}" method="post"  enctype="multipart/form-data">
				@csrf()
 
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
										<label class="required font-weight-bold text-dark text-2">Your Website</label>
										<input type="text" value="" data-msg-required="Please enter your website." maxlength="100" class="form-control" name="website" id="name" required>
									</div>
								</div>

								

									<div class="form-group col-lg-6">
											<label class="required font-weight-bold text-dark text-2">What is your goal?</label><br>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="WebsiteDevelopment"> Website Development
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="eCommerceSolutions"> E-Commerce Solutions
											</label>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="digitalMarketing"> Digital Marketing
											</label>
										</div><br>
										<div class="form-check form-check-inline">
											<label class="form-check-label">
												<input class="form-check-input" name="goal[]" type="checkbox" data-msg-required="Please select at least one option." id="inlineCheckbox1" value="otherServices"> Other Services
											</label>
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
									<label class="required 	font-weight-bold text-dark">How did you find us?</label>
										<select data-msg-required="Please enter the subject." class="form-control" name="find_us" id="subject" required>
											<option value="">...</option>
											<option value="google">Google</option>
											<option value="facebook">Facebook</option>
											<option value="twitter">Twitter</option>
											<option value="linkedin">Linkedin</option>
											<option value="friends">Friends</option>
											<option value="others">Others</option>	
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
	</div>
</div>
@endsection