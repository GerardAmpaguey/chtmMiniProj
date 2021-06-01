@extends('layouts.master')
@section('content')
	<div class="card">
		<div class="card-header">
			<h5>Borrowers</h5>
		</div>

		<div class="card-body">
			<a href="/borrowers/create" class="btn btn-primary">Add Borrower</a>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID Number</th>
						<th>Name</th>
						<th>Course</th>
						<th>Year</th>
					</tr>
				</thead>
				<tbody>

					@foreach($borrowers as $borrower)

					<tr>
						<td>{{ $borrower->id_number }}</td>
						<td>{{ $borrower->fullname }}</td>
						<td>{{ $borrower->course }}</td>
						<td>{{ $borrower->year }}</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
@endsection
		


	