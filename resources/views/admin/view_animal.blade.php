@extends('admin.admin_dashboard')
@section('admin')




              
<div class="page-content">

				

				<div class="row">
					<div class="col-md-10 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
								<h6 class="card-title">view Animal</h6>
								
								<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Id</th>
													<th>Animal Name</th>
													<th>Animal Number</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
											@foreach($data as $key =>$val)
												<tr>
													<th>{{++$key}}</th>
													<td>{{$val->animal_name}}</td>
													<td>{{$val->animal_number}}</td>
													
													<td>
														<a class="btn btn-primary" href="#">edit</a>
														<a class="btn btn-info" href="">Delete</a>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
								</div>
              </div>
            </div>
					</div>
					
				</div>

				

				

				

				

			</div>




@endsection