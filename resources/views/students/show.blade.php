@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <p class="card-text">Status : {{ $students->status }}</p>
  </div>
       
    </hr>
    {{-- <a href="{{ url('/dashboard') }}" class="btn btn-primary">Back</a> --}}
    <a href="{{ url('/admin_status') }}" class="btn btn-primary">Back</a>
  
  </div>
</div>