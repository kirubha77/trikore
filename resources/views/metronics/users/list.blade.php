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
							<i class="kt-font-brand flaticon2-line-chart"></i>
						</span>
						<h3 class="kt-portlet__head-title">
						Manage Users
						
						</h3>
					</div>
					<div class="kt-portlet__head-toolbar">
						<div class="kt-portlet__head-wrapper">
							<div class="kt-portlet__head-actions">
								
								&nbsp;
								<a href="{{ route('createUser')  }}" class="btn btn-brand btn-elevate btn-icon-sm">
									<i class="la la-plus"></i>
									Create
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__body">
					@include('errors.error')
					{{--
					<div class="row">
						<div class="col-md-4">
							<input type="date" name="fromDate" id="fromDate" class="form-control">
						</div>
						<div class="col-md-4">
							<input type="date" name="ToDate" id="toDate" class="form-control">
						</div>
						<div class="col-md-4">
							<input type="button" id="search"  class="btn btn-primary" value="Search">
						</div>
					</div>
					<br> --}}
					
					<div class="kt-section__content">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Role</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody id="FinalData">
									
									@foreach($users as $datas)
									
									<tr>
										<td>{{ ucfirst($datas->name) }}</td>
										<td>{{ $datas->email }}</td>
										<td>{{ App\Role::getUserName($datas->role_id) }}</td>										<td>
										<div class="row">
											<div class="col-md-2">
												<a href="{{ route('viewUsers',$datas->id) }}" title="View">
												<button type="submit" class="btn btn-light  btn-pill" title="View" >
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
													
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect id="bound" x="0" y="0" width="24" height="24"/>
															<path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" id="Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															<path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" id="Path" fill="#000000" opacity="0.3"/>
														</g>
													</svg>  </button></a> </div>
													
													<div class="col-md-2">
														<a href="{{ route('editUsers',$datas->id) }}" title="Edit">
														<button type="submit" class="btn btn-light  btn-pill" title="Edit" >
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect id="bound" x="0" y="0" width="24" height="24"/>
																	<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" id="Path-11" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "/>
																	<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" id="Path-57" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																</g>	
															</svg></button></a>
														</div>
													
													@if(Auth()->User()->role_id != $datas->id)
													<div class="col-md-2">
														
														<button type="submit" class="btn btn-light  btn-pill" title="Delete" onclick="return confirm('Are you sure you want to delete?');" > <a href="{{ route('deleteUsers',$datas->id) }}"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect id="bound" x="0" y="0" width="24" height="24"/>
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" id="round" fill="#000000" fill-rule="nonzero"/>
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" id="Shape" fill="#000000" opacity="0.3"/>
															</g>
														</svg>
													</a>  </button>
												</form>
											</div>
											@endif
											</div>
										</div>
									</td>
								</tr>
								
								@endforeach
								
							</tbody>
						</table>
						
						{{ $users->links() }}
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection