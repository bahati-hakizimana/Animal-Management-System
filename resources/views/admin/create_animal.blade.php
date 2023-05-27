@extends('admin.admin_dashboard')
@section('admin')























<div class="page-content">

				

				<div class="row">
					<div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
								<h6 class="card-title">Insert Animal</h6>
								
								<div class="form-responsive">
								<form method="POST" action="{{ route('admin.animal.store') }}"   class="forms-sample">
                                @csrf
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">AnimalName</label>
										<input type="text" name="animal_name" class="form-control" id="exampleInputUsername1" autocomplete="off" >
									</div>
                                    
									<div class="mb-3">
										<label for="exampleInputUsername1" class="form-label">AnimalNuber</label>
										<input type="number" name="animal_number" class="form-control" id="exampleInputUsername1" autocomplete="off"  >
									</div>
                                   
									
									<button type="submit" class="btn btn-primary me-2">Save Animal</button>
									
								</form>
								</div>
              </div>
            </div>
					</div>
					
				</div>

				

				

				

				

			</div>







































@endsection