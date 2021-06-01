@extends('layouts.master')
@section('content')
	<div class="card">
		<div class="card-header">
			<h5>Add Equipment</h5>
		</div>
		<div class="card-body">
			<form action="/equipment/store" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="Serial Number">Serial Number:</label>
							<input type="text" name="serial_number" placeholder="Serial Number" class='form-control'>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="Brand">Brand:</label>
							<input type="text" name="brand" placeholder="Brand" class="form-control">							
						</div>						
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="Date Bought">Date Bought:</label>
							<input type="date" name="date_bought" placeholder="Date Bought" class="form-control">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="Equipment Category">Equipment Category</label>
							<select name="equipment_category_id" id="" class="form-control">
								@foreach($equipment_categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 d-flex justify-content-end">
						<button class="btn btn-primary">Save Changes</button>
					</div>
				</div>
			</form>			
		</div>
	</div>
@endsection
