@extends('metronics.layouts.master')
@section('title')
Users - Trikore
@endsection
@section('managae_users_active')
kt-menu__item--active
@endsection
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
		<div class="col-md-12">
			
			<div class="kt-portlet kt-portlet--mobile">
				<div class="kt-portlet__head kt-portlet__head--lg">
					<div class="kt-portlet__head-label">
						<span class="kt-portlet__head-icon">
							<i class="kt-font-brand flaticon2-user"></i>
						</span>
						<h3 class="kt-portlet__head-title">
						Create User
						
						</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					
					<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
						@include('errors.error')
						
						<form class="kt-form kt-form--label-right" action="{{ route('storeUser') }}" enctype="multipart/form-data" method="post">
							@CSRF
							<div class="form-group row">
								<label class="col-3 col-form-label">Name</label>
								<div class="col-9">
									<input type="text" name="name"   class="form-control @error('name') is-invalid @enderror" >
								</div>
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group row">
								<label class="col-3 col-form-label">Email</label>
								<div class="col-9">
									<input type="email" name="email"   class="form-control  @error('email') is-invalid @enderror">
								</div>
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group row">
								<label class="col-3 col-form-label">Password</label>
								<div class="col-9">
									<input type="Password" name="password"   class="form-control @error('password') is-invalid @enderror">
								</div>
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group row">
								<label class="col-3 col-form-label">Confirm Password</label>
								<div class="col-9">
									<input type="password" name="password_confirmation"   class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-3 col-form-label">Role</label>
								<div class="col-9">
									
									<select class="form-control" name="role">
										@foreach($role as $roles)
										<option value="{{ $roles->id }}">{{ $roles->role_name }}</option>
										@endforeach
									</select>
									
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-12">
									<center><button type="Submit" class="btn btn-success">Submit</button>
									<button type="reset" class="btn btn-primary ">Cancel</button></center>
								</div>
							</div>
						</div>
						
						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
		@endsection