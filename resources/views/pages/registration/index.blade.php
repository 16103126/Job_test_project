@extends('layout.master')
@section('content')
<style>
	.box{
		width:600px;
		margin: 100px auto;
		border: 1px solid #ccc;
		
	}
	.has-error{
		border-color: #cc0000;
		background-color: #ffff99;
		width: 10px;
	}
</style>

<div class="container box"> 
<form method="post" action="{{route('registration.store')}}" style="padding: 40px;">
	@csrf
	<div class="form-group">
		<h2>Registration Form</h2>
        
	</div>
    <hr><br>

	<div class="form-group">
		@if($errors->any())
	<div class="alert alert-danger">
			@foreach($errors->all() as $error)
			{{$errors}}
			@endforeach	
	    @endif
    </div>
    
	<div class="form-group">
		<label for="first_name"><h5>First Name:</h5></label>
		<input type="text" name="first_name" class="form-control" placeholder="Enter First Name" required>
	</div>
    <div class="form-group">
		<label for="last_name"><h5>Last Name:</h5></label>
		<input type="text" name="last_name" class="form-control" placeholder="Enter Last Name" required>
	</div>
    <div class="form-group">
		<label for="org_name"><h5>Organization Name:</h5></label>
		<input type="text" name="org_name" class="form-control" placeholder="Enter Organization Name" required>
	</div>
    <div class="form-group">
		<label for="street"><h5>street:</h5></label>
		<input type="text" name="street" class="form-control" placeholder="Enter Street" required>
	</div>
    <div class="form-group">
		<label for="city"><h5>City:</h5></label>
		<input type="text" name="city" class="form-control" placeholder="Enter City" required>
	</div>
	<div class="form-group">
		<label for="email"><h5>Email:</h5></label>
		<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
	</div>
	<div class="form-group">
		<label for="phone_no"><h5>Phone Number:</h5></label>
		<input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number" required>
	</div>
	<div class="form-group">
		<label for="password"><h5>Password:</h5></label>
		<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
	</div>
	<div class="form-group">
		<label for="password_confirmation"><h5>Password Confirmation:</h5></label>
		<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Enter Password">
	</div>
	
	<div class="form-group">
		<button type="Submit" class="btn btn-primary">Submit</button>
	</div>
</form>
</div>

@endsection