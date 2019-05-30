@extends('metronics.layouts.master')
@section('title')
View Users - Trikore
@endsection
@section('managae_users_active')
kt-menu__item--active
@endsection
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
	<div class="row">
		<div class="col-md-12">
			
			<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
				<div class="row">
					<div class="col-md-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
									User Details
									</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4">
									<!--begin:: Widgets/Sales States-->
									<div class="kt-portlet kt-portlet--height-fluid">
										
										<div class="kt-portlet__body">
											<div class="kt-widget6">
												
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span class="kt-widget4__title">Name</span>
														<span>{{ $user->name }}</span>
														<span class="kt-font-success kt-font-bold"></span>
													</div>
													
												</div>
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span class="kt-widget4__title">Email</span>
														<span>{{ $user->email  }}</span>
														<span class="kt-font-success kt-font-bold"></span>
													</div>
													
												</div>
												<div class="kt-widget6__body">
													<div class="kt-widget6__item">
														<span class="kt-widget4__title">Role</span>
														<span>{{ App\Role::getRoleName($user->role_id) }}</span>
														<span class="kt-font-success kt-font-bold"></span>
													</div>
													
												</div>
											
											</div>
										</div>
									</div>
									<!--end:: Widgets/Sales States-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
					@endsection