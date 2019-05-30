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
						Edit User
						
						</h3>
					</div>
					
				</div>
				<div class="kt-portlet__body">
					
					<div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
						
						<form class="kt-form kt-form--label-right" action="{{ route('updateUser',$user->id)  }}" enctype="multipart/form-data" method="post">
							@CSRF
							<div class="form-group row">
								<label class="col-3 col-form-label">Name</label>
								<div class="col-9">
									<input type="text" name="name" value="{{ $user->name }}" readonly=""  class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-3 col-form-label">Email</label>
								<div class="col-9">
									<input type="text" name="email" value="{{ $user->email }}" readonly=""  class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-3 col-form-label">Role</label>
								<div class="col-9">
									
									<select class="form-control" {{ ($user->role_id == 1)?'disabled':'' }} name="role">
										@foreach($role as $roles)
										<option value="{{ $roles->id }}"  {{ ($user->role_id ==$roles->id)?'selected':''   }}>{{ $roles->role_name }}</option>
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