@extends('layout.master')

@section('content')

@include('layout.script')

<style>
  .box{
    width:600px;
    margin: 100px auto;
    border: 1px solid #ccc;
    background-color: #9ACD32;
  }
  .hidden{
    display: none;
}
h3{
  color: white;
  text-align: center;
  margin-top: 10px;
}
</style>

	
    <div class="container box"> 
    <h3>Create License</h3>

    <div class="form-group">
			@if($errors->any())
		<div class="alert alert-danger">		
				@foreach($errors->all() as $error)
				{{$errors}}
				@endforeach		
		@endif
	</div>
        
        <form method="post" action="{{route('license.store')}}" style="padding: 40px;">
            @csrf

       <div class="form-group">
    
        @foreach ($users as $user)
 
            @if ($user->user_id == "$user->id")
            
            @else
            <div id="user_{{$user->id}}" class=" text-center mt-2 hidden">

                <table class="table table-bordered" style="background-color: white; text-align:left;">
                    <tbody>
                      <tr>
                        <td>First name</td>
                        <td>{{$user->first_name}}</td>
                      </tr>
                      <tr>
                        <td>Last name</td>
                        <td>{{$user->last_name}}</td>
                      </tr>
                      <tr>
                        <td>Name of the Organization</td>
                        <td>{{$user->org_name}}</td>
                      </tr>
                      <td scope="row">Street</td>
                        <td>{{$user->street}}</td>
                      </tr>
                      <tr>
                        <td scope="row">City</td>
                        <td>{{$user->city}}</td>
                      </tr>
                      <tr>
                        <td scope="row">Phone</td>
                        <td>{{$user->phone_no}}</td>
                      </tr>
                      <td scope="row">Email</td>
                        <td>{{$user->email}}</td>
                      </tr>
                      <tr>
                        <td scope="row">Lisense Key</td>
                        <td>{{$user->license_key}}</td>
                      </tr>          
                    </tbody>
                  </table>
            </div>
            @endif
        
        @endforeach

        <div class="form-group">
        <label for="user_id"><h5 style="color: white;">Client Id</h5></label>
            <select class="form-group" style="margin-left: 94px; height:40px; width:275px;" name="user_id" id="users" required>
                <option value="">Select client id</option>
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->id}}</option>
                @endforeach
            </select>  
          </div>

           
    <div class="form-group row">
		<label for="license_key" style="color: white" class="col-sm-4 col-form-label"><h5>License Key</h5></label>
    <div class="col-sm-7">
		<input type="text" name="license_key" class="form-control" placeholder="Enter license key" required>
  </div>
	</div>

  <div class="form-group">
    <label for="expire_date"><h5 style="color: white;">License for</h5></label>
        <select class="livesearch" style="margin-left: 72px; height:40px; width:275px;" name="expire_date" id="expire_date" required>
            <option value="">Select month</option>
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="12">12</option>
        </select>  
      </div>
	                 
	<div class="form-group" style="margin-left: 200px;">
		<button type="Submit" style=" background-color:#00FA9A; color:black; width:200px; height: 40px;" class="btn btn-success">Save</button>
	</div>

  <div class="form-group" style="margin-left: 300px;">
    <a href="{{URL::route('login')}}" style="color: white;"> <p >Return to <span style="color: red; font-weight: bold;">login</span> page.</p></a> 
  </div>
	
</form>

</div>

<script>
  var test ={{"$user->id"}};
  $("#users").change(function(){
      $user_method=$("#users").val();
      if($user_method="{{$user->id}}"){
          $("#user_{{"$user->id"}}").removeClass('hidden');
      }
      
  });
</script>

<script>
  $("#users").select({
    placeholder: "Select a Name",
    allowClear: true
});
</script>

<script type="text/javascript">
  $(".livesearch").chosen();
</script>
































<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.map"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></scrpt>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



    
@endsection


