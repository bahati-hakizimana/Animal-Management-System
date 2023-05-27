@extends('admin.admin_dashboard')
@section('admin')























<div class="page-content">

				

				<div class="row">
					<div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
								<h6 class="card-title">Insert People</h6>
								
								<div class="form-responsive">
								<form method="POST" action="{{ route('admin.people.store') }}"   class="forms-sample">
                                @csrf
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">FirstName</label>
										<input type="text" name="first_name" class="form-control" id="exampleInputUsername1" autocomplete="off" >
									</div>
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">LastName</label>
										<input type="text" name="last_name" class="form-control" id="exampleInputUsername1" autocomplete="off"  >
									</div>
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Email address</label>
										<input type="email" name="email" class="form-control" id="exampleInputEmail1">
									</div>
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Phone</label>
										<input type="number" name="phone" class="form-control" id="exampleInputUsername1" autocomplete="off"  >
									</div>
                                    <div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">Address</label>
										<input type="text" name="address" class="form-control" id="exampleInputUsername1" autocomplete="off" >
									</div>
									
									<button type="submit" class="btn btn-primary me-2">Save People</button>
									
								</form>
								</div>
              </div>
            </div>
					</div>
					
				</div>

				

				

				

				

			</div>







































@endsection