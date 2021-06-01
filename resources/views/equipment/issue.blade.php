@extends('layouts.master')
@section('content')
	<div class="card" id='app'>
		<div class="card-header">
			<h5>Issue Equipment to Borrower</h5>
		</div>

		<div class="card-body">
				@csrf
				<div class="row">
					<div class="col-sm-4">
				<div class="form-group">
					<label for="id_number" >ID Number:</label>
					<input type="text" class="form-control" name="id_number" id="id_number" required v-model='id_number'>
				</div>
			</div>
			<div class="col-sm-4">
				<br>
				<button class="btn btn-primary" v-on:click='findBorrower'>Search</button>
			</div>
			<div class="col-sm-4"> 
				<div class="form-group">
					<label for="first_name" >First Name:</label>
					<input type="text" class="form-control" name="first_name" id="first_name" required :disabled="borrower_exists" :value = "current_borrower.first_name">
				</div>
			</div>
			<div class="col-sm-4"> 
				<div class="form-group">
					<label for="middle_name" >Middle Name:</label>
					<input type="text" class="form-control" name="middle_name" id="middle_name" required :disabled="borrower_exists" :value = "current_borrower.middle_name">
				</div>
			</div>

			<div class="col-sm-4"> 
				<div class="form-group">
					<label for="last_name" >Last Name:</label>
					<input type="text" class="form-control" name="last_name" id="last_name" required :disabled="borrower_exists" :value = "current_borrower.last_name">
				</div>
			</div>

			<div class="col-sm-3"> 
				<div class="form-group">
					<label for="course" >Course:</label>
					<input type="text" class="form-control" name="course" id="course" required :disabled="borrower_exists" :value = "current_borrower.course">
				</div>
			</div>

			<div class="col-sm-3"> 
				<div class="form-group">
					<label for="year" >Year:</label>
					<input type="text" class="form-control" name="year" id="year" required :disabled="borrower_exists" :value = "current_borrower.year">
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
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script> 
		var equipment =@json($equipment);
		var borrowers =@json($borrowers);
	</script>
	<script>
		var vm = new Vue({
			el: '#app',
			data:{
				equipment:equipment,
				borrowers:borrowers,
				id_number:'',
				borrower_exists:true,
				current_borrower:''
			},

			methods:{
				findBorrower(){
					var borrowerExists = this.borrowers.find(borrower=>{return borrower.id_number == this.id_number;
					});

					if(borrowerExists){
						this.borrower_exists = true;
						this.current_borrower=borrower_exists;
					} else {
						this.borrower_exists = false;
					}
				}
			}
		})
	</script>
@endsection
		
