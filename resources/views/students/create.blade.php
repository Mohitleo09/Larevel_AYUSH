@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
    <form action="{{ url('student') }}" method="post">
      {!! csrf_field() !!}
      <label for="name">Name:</label><br>
      <input type="text" name="name" id="name" class="form-control"><br>
      <label for="address">Address:</label><br>
      <input type="text" name="address" id="address" class="form-control"><br>
      <label for="mobile">Mobile:</label><br>
      <input type="text" name="mobile" id="mobile" class="form-control"><br>
      <div class="form-group row">
          <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Save" class="btn btn-success">
              <a href="{{ url('/dashboard') }}" class="btn btn-primary">Cancel</a>
          </div>
      </div>
  </form>
  
   
  </div>
</div>
 
@stop