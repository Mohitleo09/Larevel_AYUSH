<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ayush</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('home/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        @include('home.Aheader')

        <!--================ Accomodation Area  =================-->
        <div class="container-xxl py-5">
            <div class="container">   
                <section class="accomodation_area section_gap">
                    <div class="container">
                        <div class="section_title text-center">
                            <h2 class="title_color">Add Investor Details</h2>
                        </div>
                        <div class="card-body">
                            <a href="{{ url('/investorcreate') }}" class="btn btn-success btn-sm" title="Add New Investor">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <br/><br/>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>Company</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($investors as $item)
                                        <tr id="row-{{ $item->id }}">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src="{{ asset($item->investor_logo) }}" alt="Investor Image" style="max-width: 100px;">
                                            </td>
                                            <td>{{ $item->investor_company_name }}</td>
                                            <td>{{ $item->investor_city }}</td>
                                            <td>{{ $item->investor_state }}</td>
                                            <td>{{ $item->investor_amount }}</td>
                                            <td>
                                                <button 
                                                    class="btn btn-danger btn-sm delete-btn" 
                                                    data-id="{{ $item->id }}" 
                                                    title="Delete">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
        @include('home.footer')
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('home/js/main.js') }}"></script>

    <!-- AJAX Script -->
    <script>
        $(document).ready(function () {
            $('.delete-btn').click(function () {
                var investorId = $(this).data('id');
                var row = $('#row-' + investorId);

                if (confirm('Are you sure you want to delete this investor?')) {
                    $.ajax({
                        url: '/investors/' + investorId + '/investordestroy',
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function (response) {
                            if (response.success) {
                                row.fadeOut(500, function () {
                                    $(this).remove();
                                });
                                alert(response.message);
                            } else {
                                alert('Error: ' + response.message);
                            }
                        },
                        error: function (xhr) {
                            alert('An error occurred while trying to delete this investor.');
                        }
                    });
                }
            });
        });



        $(document).ready(function () {
    $('#addInvestorForm').submit(function (e) {
        e.preventDefault(); // Prevent default form submission

        // Prepare form data
        var formData = new FormData(this);

        // AJAX request
        $.ajax({
            url: '/investors', // Replace with your server-side route
            type: 'POST',
            data: formData,
            processData: false, // Necessary for file uploads
            contentType: false, // Necessary for file uploads
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token for Laravel
            },
            success: function (response) {
                if (response.success) {
                    alert('Investor added successfully!');
                    $('#addInvestorForm')[0].reset(); // Reset the form
                    // Optionally refresh the table or append the new investor
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function (xhr) {
                alert('An error occurred. Please try again.');
            }
        });
    });
});




    </script>
</body>
</html>
