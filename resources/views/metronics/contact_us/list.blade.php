@extends('metronics.layouts.master')
@section('title')
contact_Us List - Trikore
@endsection
@section('contact_us_active')
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
							Contact Us List
						
						</h3>
					</div>
					 <div class="kt-portlet__head-toolbar">
        
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
									<th>Phone.No.</th>
									<th>Message</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="FinalData">
								
									@foreach($contact_us as $datas)
									
									<tr>
										<td>{{ $datas->name }}</td>
										<td>{{ $datas->email }}</td>
										<td>{{ $datas->phone_no }}</td>
										<td>{{ $datas->message }}</td>										<td>
											<div class="row">
												<div class="col-md-4"><a href="{{ route('contactUsView',$datas->id) }}" title="View">
													<button type="submit" class="btn btn-light  btn-pill" title="View" >
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
														
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" id="Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" id="Path" fill="#000000" opacity="0.3"/>
    </g>
</svg>  </button></a> </div>
												
												
												
												<div class="col-md-4">
													<a href="{{ route('contactUsDelete',$datas->id) }}">
															<button type="submit" class="btn btn-light  btn-pill" title="Delete" onclick="return confirm('Are you sure you want to delete?');" > <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"/>
        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" id="round" fill="#000000" fill-rule="nonzero"/>
        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" id="Shape" fill="#000000" opacity="0.3"/>
    </g>
</svg>
													 </button></a> 
													</form>
												</div>
												
											</div>
										</td>
									</tr>
									
									@endforeach
								
							</tbody>
						</table>
						
					{{ $contact_us->links() }}

					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>




@endsection