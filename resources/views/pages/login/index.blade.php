@extends('layout.master')
@section('content')


	<style>
		.box{
			width:600px;
			margin: 100px auto;
			border: 1px solid #ccc;
			background-color: #7B68EE;
		}
		.has-error{
			border-color: #cc0000;
			background-color: #ffff99;
			width: 10px;
		}
	</style>
	
	
    <div class="container box">
		
		<h2 class="mt-5" style="color: white; margin-left:43px;">Login Form</h2>
		<hr>

		<div class="form-group">
			@if($errors->any())
		    <div class="alert alert-danger">
			
				@foreach($errors->all() as $error)
				{{$errors}}
				@endforeach
				
		     @endif
			</div>

   <form method="post" action="{{route('login.store')}}" style="padding: 40px;">

	@csrf	
	
	<div class="form-group">
		<label for="phone_no"><h6 style="color: white;">Phone Number:</h6></label>
		<input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number" required>
	</div>

	<div class="form-group">
		<label for="password"><h6 style="color: white;">Password:</h6></label>
		<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
	</div>
	
	<div class="form-group">
		<button type="Submit" class="btn btn-primary" style="background-color: #DC143C; width:200px; height:40px; margin-left:100px;">Login</button>
	</div>
	
</form>

</div>

    
@endsection


