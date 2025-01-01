<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ayush</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="home/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Header Area -->
        @include('home.Aheader')

        <!-- Main Content Area -->
        <div class="container-xxl py-5">
            <div class="container">
                <section class="accomodation_area section_gap">
                    <div class="container">
                        <div class="section_title text-center">
                            <h2 class="title_color">Add Details</h2>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <form id="incubatorForm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Company Name -->
                                    <div class="form-group">
                                        <label for="incubator_company_name">Company Name:</label>
                                        <input type="text" name="incubator_company_name" id="incubator_company_name" class="form-control" placeholder="Enter company name">
                                        <span class="invalid-feedback" id="error_incubator_company_name"></span>
                                    </div>

                                    <!-- City -->
                                    <div class="form-group">
                                        <label for="incubator_city">City:</label>
                                        <input type="text" name="incubator_city" id="incubator_city" class="form-control" placeholder="Enter city">
                                        <span class="invalid-feedback" id="error_incubator_city"></span>
                                    </div>

                                    <!-- State -->
                                    <div class="form-group">
                                        <label for="incubator_state">State:</label>
                                        <input type="text" name="incubator_state" id="incubator_state" class="form-control" placeholder="Enter state">
                                        <span class="invalid-feedback" id="error_incubator_state"></span>
                                    </div>

                                    <!-- Program Duration -->
                                    <div class="form-group">
                                        <label for="incubator_program_duration">Program Duration (in months):</label>
                                        <input type="number" name="incubator_program_duration" id="incubator_program_duration" class="form-control" placeholder="Enter duration in months">
                                        <span class="invalid-feedback" id="error_incubator_program_duration"></span>
                                    </div>

                                    <!-- Company Logo -->
                                    <div class="form-group">
                                        <label for="incubator_logo">Upload Company Logo:</label>
                                        <input type="file" name="incubator_logo" id="incubator_logo" class="form-control-file">
                                        <span class="invalid-feedback" id="error_incubator_logo"></span>
                                    </div>

                                    <!-- Submit Button -->
                                    <input type="submit" value="Save" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Footer -->
        @include('home.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="home/lib/wow/wow.min.js"></script>
    <script src="home/lib/easing/easing.min.js"></script>
    <script src="home/lib/waypoints/waypoints.min.js"></script>
    <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="home/js/main.js"></script>

    <!-- AJAX Script -->
    <script>
        $(document).ready(function () {
            $('#incubatorForm').on('submit', function (e) {
                e.preventDefault(); // Prevent the default form submission

                let formData = new FormData(this); // Collect form data

                // Clear previous error messages
                $('.invalid-feedback').text('');

                // AJAX Request
                $.ajax({
                    url: "{{ route('incubator_add') }}", // Laravel route
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response.success) {
                            alert(response.message);
                            $('#incubatorForm')[0].reset(); // Reset the form
                        }
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) { // Validation error
                            let errors = xhr.responseJSON.errors;
                            for (let field in errors) {
                                $(`#error_${field}`).text(errors[field][0]);
                            }
                        } else {
                            alert('An error occurred. Please try again.');
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
