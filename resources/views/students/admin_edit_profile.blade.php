@extends('students.layout')
@section('content')
 
<div class="card">
    <div class="card-header">Admin Edit Profile</div>
    <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
      
    
        <form action="{{ route('admin_update_profile', ['id' => Auth::user()->id]) }}" method="post">

      {!! csrf_field() !!}
      @method("PATCH")
      <div class="mb-3 row">
        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
        <div class="col-md-6">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ Auth::user()->name }}">
            @error('name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
        <div class="col-md-6">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ Auth::user()->email }}">
            @error('email')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
            @error('password')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-6 offset-md-4">
            <input type="submit" value="Update" class="btn btn-success">
              <a href="{{ url('/dashboard') }}" class="btn btn-primary">Cancel</a>
        </div>
    </div>
  </form>
  
   
  </div>
</div>
 
@stop