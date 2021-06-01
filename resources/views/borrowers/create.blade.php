@extends('layouts.master')
@section('content')
	<div class="card">
		<div class="card-header">
			<h5>Add Borrower</h5>
		</div>

		<div class="card-body">
			<form = action="/borrowers/store" method='POST'>
				@csrf
				<div class="row">
					<div class="col-sm-4">
				<div class="form-group">
					<label for="id_number" >ID Number:</label>
					<input type="text" class="form-control" name="id_number" id="id_number" required>
				</div>
			</div>
			<div class="col-sm-4"> 
				<div class="form-group">
					<label for="first_name" >First Name:</label>
					<input type="text" class="form-control" name="first_name" id="first_name" required>
				</div>
			</div>
			<div class="col-sm-4"> 
				<div class="form-group">
					<label for="middle_name" >Middle Name:</label>
					<input type="text" class="form-control" name="middle_name" id="middle_name" required>
				</div>
			</div>

			<div class="col-sm-4"> 
				<div class="form-group">
					<label for="last_name" >Last Name:</label>
					<input type="text" class="form-control" name="last_name" id="last_name" required>
				</div>
			</div>

			<div class="col-sm-3"> 
				<div class="form-group">
					<label for="course" >Course:</label>
					<input type="text" class="form-control" name="course" id="course" required>
				</div>
			</div>

			<div class="col-sm-3"> 
				<div class="form-group">
					<label for="year" >Year:</label>
					<input type="text" class="form-control" name="year" id="year" required>
				</div>
			</div>





		</div>

		<div class="row">
			<div class="col-sm-12 d-flex justify-content-end">
				<button class="btn btn-primary">Save Chanes</button>
			</div>
		</div>
				
			</form>
			
		</div>
	</div>
@endsection
		
