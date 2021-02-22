@extends('layout.master')
@section('content')

<style>
	.box{
	  width:450px;
	  height: 300px;
	  margin: 100px auto;
	  border: 1px solid #ccc;
	  background-color: #9ACD32
	}
	
  h4{
	color: white;
	text-align: center;
	margin-top: 10px;
  }
  </style>
    
<div class=".has-error mt-5">
	@if($errors->any())
	<div class="alert alert-danger">
	
		@foreach($errors->all() as $error)
		{{$errors}}
		@endforeach
		
	@endif
	</div>
	</div>

    <div class="container box"> 

		<h4 class="mt-3">Enter license key</h4>

   <form method="post" action="{{route('license.activate.store')}}" style="padding: 40px;">

	@csrf	
	
	<div class="form-group row" style="margin-left: -50px;">
		<label for="license_key" style="color: white" class="col-sm-4 col-form-label"><p>License Key</p></label>
    <div class="col-sm-8" >
		<input type="text" name="license_key" class="form-control" placeholder="Enter license key" required>
  </div>
	</div>
	
	<div class="form-group" style="margin-left: 100px; margin-top:30px;">
		<button type="Submit" style=" background-color:#00FA9A; color:black; width:240px; height: 40px;" class="btn btn-success">Save</button>
	</div>
	<div class="form-group" style="margin-left: 185px;">
		<a href="{{URL::route('login')}}" style="color: white;"> <p >Return to <span style="color: red; font-weight: bold;">login</span> page.</p></a> 
	  </div>
	
</form>
</div>

    
@endsection


