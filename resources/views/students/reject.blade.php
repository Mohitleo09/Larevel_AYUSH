@extends('auth.layouts')

@section('content')

<style>
    #admin-dashboard-link {
        cursor: pointer; /* Change cursor to pointer on hover */
        text-decoration: none; /* Remove underline */
        color: inherit; /* Inherit text color */
    }
</style>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        
        <div class="card">
            <a href="{{ route('admin_dashboard') }}" class="card-header btn btn-primary">Admin Dashboard</a>
            <div class="card-header btn btn-primary" id="status-dashboard"><span id="admin-dashboard-link">Status</span></div>
            
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                @endif                
            </div>
            <div class="card-body">
                <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td>{{ $student->status }}</td>
                                    <td>
                                        <a href="{{ route('student.show', $student->id) }}" title="View Student" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</a>
                                        <a href="{{ route('student.approve', $student->id) }}" title="Approve Student" class="btn btn-success btn-sm"><i class="fa fa-check" aria-hidden="true"></i> Approve</a>
                                        <a href="{{ route('student.reject', $student->id) }}" title="Reject Student" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> Reject</a>
                                        <form method="POST" action="{{ route('student.destroy', $student->id) }}" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Are you sure you want to delete this student?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>

<script>
    document.getElementById('status-dashboard').addEventListener('click', function() {
        location.reload();
    });
</script>

@endsection
