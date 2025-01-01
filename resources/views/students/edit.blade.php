@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contact us Page</div>
  <div class="card-body">
      
    <form action="{{ url('student/' .$students->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$students->id}}" />
      <label for="name">Name:</label><br>
      <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"><br>
      <label for="address">Address:</label><br>
      <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control"><br>
      <label for="mobile">Mobile:</label><br>
      <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"><br>
      <div class="form-group row">
          <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Update" class="btn btn-success">
              <a href="{{ url('/dashboard') }}" class="btn btn-primary">Cancel</a>
          </div>
      </div>
  </form>
  
   
  </div>
</div>
 
@stop