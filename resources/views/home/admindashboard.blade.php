<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ayush</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="home/image/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/home/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">

    <style>
        /* CSS for the resource cards hover effect */
        .resource-card {
            margin: 10px;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .resource-card:hover {
            transform: translateY(-10px); /* Lift the card */
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15); /* Add shadow */
        }

        .resource-card img {
            transition: transform 0.3s ease; /* Smooth image scaling */
        }

        .resource-card:hover img {
            transform: scale(1.05); /* Slight zoom on hover */
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        {{-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> --}}

        <!--================Header Area =================-->

        @include('home.Aheader')
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="home/image/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(44, 64, 43, 0.5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect That You Deserved</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Detail</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="home/image/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup That Fit You</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Detail</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Jobs Start -->
<!-- Resources Section Start -->
<div class="container py-5">
    <h2 class="text-center mb-5 fw-bold" style="font-size: 2.5rem; color: #4e4e4e;">Resources</h2>
    <p class="text-center mb-5" style="font-size: 1.1rem; color: #777;">The AYUSH Start-up Portal provides a variety of resources to support and empower stakeholders in the AYUSH ecosystem.</p>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Resource Item -->
        <div class="col">
            <div class="card resource-card h-100 shadow-lg border-0 position-relative overflow-hidden">
                <img src="home/image/investor.jpg" class="card-img-top img-fluid" alt="Investor Information">
                <div class="card-body position-relative" style="background: rgba(255, 255, 255, 0.9); padding: 30px;">
                    <h5 class="card-title d-flex align-items-center">
                        <i class="bi bi-graph-up text-primary me-2" style="font-size: 1.5rem;"></i> Investor Support
                    </h5>
                    <p class="card-text mt-3" style="font-size: 0.95rem; color: #555;">Comprehensive resources to help investors understand the potential of the AYUSH industry, investment opportunities, and sector trends.</p>
                </div>
            </div>
        </div>

        <!-- Resource Item -->
        <div class="col">
            <div class="card resource-card h-100 shadow-lg border-0 position-relative overflow-hidden">
                <img src="home/image/incubation.jpg" class="card-img-top img-fluid" alt="Incubator Support">
                <div class="card-body position-relative" style="background: rgba(255, 255, 255, 0.9); padding: 30px;">
                    <h5 class="card-title d-flex align-items-center">
                        <i class="bi bi-people text-primary me-2" style="font-size: 1.5rem;"></i> Incubator Support
                    </h5>
                    <p class="card-text mt-3" style="font-size: 0.95rem; color: #555;">A directory of incubators and accelerators, along with application guidelines to assist budding AYUSH startups in securing incubation for growth and support.</p>
                </div>
            </div>
        </div>

        <!-- Additional Resource Items -->
        <div class="col">
            <div class="card resource-card h-100 shadow-lg border-0 position-relative overflow-hidden">
                <img src="home/image/mentor.jpg" class="card-img-top img-fluid" alt="Mentorship Programs">
                <div class="card-body position-relative" style="background: rgba(255, 255, 255, 0.9); padding: 30px;">
                    <h5 class="card-title d-flex align-items-center">
                        <i class="bi bi-lightbulb text-primary me-2" style="font-size: 1.5rem;"></i> Mentor Support
                    </h5>
                    <p class="card-text mt-3" style="font-size: 0.95rem; color: #555;">Details on mentorship opportunities connecting startups with experienced professionals in the AYUSH ecosystem to provide guidance and foster growth.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card resource-card h-100 shadow-lg border-0 position-relative overflow-hidden">
                <img src="home/image/public.jpg" class="card-img-top img-fluid" alt="Public User Engagement">
                <div class="card-body position-relative" style="background: rgba(255, 255, 255, 0.9); padding: 30px;">
                    <h5 class="card-title d-flex align-items-center">
                        <i class="bi bi-chat-dots text-primary me-2" style="font-size: 1.5rem;"></i> Public User Engagement
                    </h5>
                    <p class="card-text mt-3" style="font-size: 0.95rem; color: #555;">Information on how public users can engage with and support the AYUSH community, including options to interact with startups, attend events, and explore products and services.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resources Section End -->
        <!-- Jobs End -->

         <!-- Jobs Start -->
         <div class="container-xxl py-5">
            <div class="container">
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        {{-- <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">All</h6>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Mentor</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Investor</h6>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0">Incubator</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                        <div id="tab-1" class="tab-pane fade show p-0">
                            <div id="mentor-list">
                                <!-- Dynamic mentor items will be loaded here -->
                            </div>
                            {{-- <a class="btn btn-primary py-3 px-5" href="{{ route('mentoradd') }}">Browse More Details</a> --}}
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>
                            // Function to fetch mentors and display them in the view
                            function fetchMentors() {
                                $.ajax({
                                    url: '{{ url('/get_mentor') }}', // Use your route to the getmentor function
                                    method: 'GET',
                                    success: function(response) {
                                        // Clear the existing list
                                        $('#mentor-list').empty();
                                        
                                        // Iterate through each mentor and append to the list
                                        response.forEach(function(mentor) {
                                            // Generate the HTML structure for each mentor
                                            const mentorHtml = `
                                                <div class="job-item p-4 mb-4" id="mentor-${mentor.id}">
                                                    <div class="row g-4">
                                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('${mentor.image}') }}" alt="" style="width: 80px; height: 80px;">
                                                            <div class="text-start ps-4">
                                                                <h5 class="mb-3">${mentor.name} | ${mentor.email}</h5>
                                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>${mentor.city}, ${mentor.state}</span>
                                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>About: ${mentor.about}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                            <div class="d-flex gap-2 mb-3 align-items-center">
                                                            <a class="btn btn-primary px-4 py-2 rounded-pill shadow-sm" href="/chatify/${mentor.id}">
                                                                <i class="bi bi-chat-fill"></i> Chat 
                                                            </a>
                                                            <button class="btn btn-danger px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2" onclick="deleteMentor(${mentor.id})">
                                                                <i class="bi bi-trash-fill"></i> Delete
                                                            </button>
                                                        </div>                                                                                
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ${new Date(mentor.created_at).toLocaleDateString()}</small>                                                        </div>
                                                    </div>
                                                </div>
                                            `;
                                            $('#mentor-list').append(mentorHtml);
                                        });
                                    },
                                    error: function() {
                                        $('#mentor-list').text('Error loading mentors.');
                                    }
                                });
                            }
                        
                            function deleteMentor(mentorId) {
    console.log('Deleting Mentor ID:', mentorId); // Debug log to check the ID
    if (confirm('Are you sure you want to delete this mentor?')) {
        $.ajax({
            url: `/delete_mentor/${mentorId}`,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
            },
            success: function(response) {
                if (response.success) {
                    $(`#mentor-${mentorId}`).remove();
                    alert('Mentor deleted successfully.');
                } else {
                    alert('Failed to delete the mentor: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Error deleting mentor.');
                console.error(`Error: ${xhr.status} - ${xhr.statusText}`);
            }
        });
    }
}

                        
                            // Call the function on page load
                            $(document).ready(function() {
                                fetchMentors();
                            });
                        </script>
                        
                        


                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div id="investor-list">
                                <!-- Dynamic investor items will be loaded here -->
                            </div>
                            {{-- <a class="btn btn-primary py-3 px-5" href="{{ route('investorfulldetail') }}">Browse More Details</a> --}}
                        </div>
                        
                        <!-- Include jQuery if not already included -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        
                        <script>
                            // Function to fetch investors and display them in the view
                            function fetchInvestors() {
                                $.ajax({
                                    url: '{{url('/get_investor') }}', // Use your route to the getInvestors function
                                    method: 'GET',
                                    success: function(response) {
                                        $('#investor-list').empty();
                        
                                        // Iterate through each investor and append to the list
                                        response.forEach(function(investor) {
                                            const investorHtml = `
                                                <div class="job-item p-4 mb-4" id="investor-${investor.id}">
                                                    <div class="row g-4">
                                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('${investor.image}') }}" alt="" style="width: 80px; height: 80px;">
                                                            <div class="text-start ps-4">
                                                                <h5 class="mb-3">${investor.name}  |  ${investor.email}</h5>
                                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>${investor.city}, ${investor.state}</span>
                                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>About: ${investor.about}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <div class="d-flex gap-2 mb-3 align-items-center">
                                                            <a class="btn btn-primary px-4 py-2 rounded-pill shadow-sm" href="/chatify/${investor.id}">
                                                                <i class="bi bi-chat-fill"></i> Chat 
                                                            </a>
                                                            <button class="btn btn-danger px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2" onclick="deleteInvestor(${investor.id})">
                                                                <i class="bi bi-trash-fill"></i> Delete
                                                            </button>
                                                        </div>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ${new Date(investor.created_at).toLocaleDateString()}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;
                                            $('#investor-list').append(investorHtml);
                                        });
                        
                                        // Add event listener for delete buttons
                                        $('.delete-investor').on('click', function() {
                                            const investorId = $(this).data('id');
                                            deleteInvestor(investorId);
                                        });
                                    },
                                    error: function() {
                                        $('#investor-list').text('Error loading investors.');
                                    }
                                });
                            }
                        
                            function deleteInvestor(investorId) {
    console.log('Deleting Investor ID:', investorId); // Debug log to check the ID
    if (confirm('Are you sure you want to delete this investor?')) {
        $.ajax({
            url: `/delete_investor/${investorId}`,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
            },
            success: function(response) {
                if (response.success) {
                    $(`#investor-${investorId}`).remove();
                    alert('Investor deleted successfully.');
                } else {
                    alert('Failed to delete the investor: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Error deleting investor.');
                console.error(`Error: ${xhr.status} - ${xhr.statusText}`);
            }
        });
    }
}
                        
                            // Call the function on page load
                            $(document).ready(function() {
                                fetchInvestors();
                            });
                        </script>
                        
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div id="incubator-list">
                                <!-- Dynamic incubator items will be loaded here -->
                            </div>
                            {{-- <a class="btn btn-primary py-3 px-5" href="{{ route('incubatorfulldetail') }}">Browse More Details</a> --}}
                        </div>

                        <!-- Include jQuery if not already included -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

                        <script>
                            // Function to fetch incubators and display them in the view
                            function fetchIncubators() {
                                $.ajax({
                                    url: '{{url('/get_incubator') }}', // Use your endpoint for fetching incubators
                                    method: 'GET',
                                    success: function(response) {
                                        $('#incubator-list').empty(); // Clear any existing content
                                        
                                        // Iterate through each incubator and append to the list
                                        response.forEach(function(incubator) {
                                            const incubatorHtml = `
                                                <div class="job-item p-4 mb-4" id="incubator-${incubator.id}">
                                                    <div class="row g-4">
                                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('${incubator.image}') }}" alt="" style="width: 80px; height: 80px;">
                                                            <div class="text-start ps-4">
                                                                <h5 class="mb-3">${incubator.name} | ${incubator.email}</h5>
                                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>${incubator.city}, ${incubator.state}</span>
                                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>About: ${incubator.about}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <div class="d-flex gap-2 mb-3 align-items-center">
                                                            <a class="btn btn-primary px-4 py-2 rounded-pill shadow-sm" href="/chatify/${incubator.id}">
                                                                <i class="bi bi-chat-fill"></i> Chat 
                                                            </a>
                                                            <button class="btn btn-danger px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2" onclick="deleteIncubator(${incubator.id})">
                                                                <i class="bi bi-trash-fill"></i> Delete
                                                            </button>
                                                        </div>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Created: ${new Date(incubator.created_at).toLocaleDateString()}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;
                                            $('#incubator-list').append(incubatorHtml); // Append incubator data
                                        });
                        
                                        // Add event listener for delete buttons
                                        $('.delete-incubator').on('click', function() {
                                            const incubatorId = $(this).data('id');
                                            deleteIncubator(incubatorId);
                                        });
                                    },
                                    error: function() {
                                        $('#incubator-list').text('Error loading incubators.');
                                    }
                                });
                            }
                        
                            function deleteIncubator(incubatorId) {
    console.log('Deleting Incubator ID:', incubatorId); // Debug log to check the ID
    if (confirm('Are you sure you want to delete this incubator?')) {
        $.ajax({
            url: `/delete_incubator/${incubatorId}`,
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
            },
            success: function(response) {
                if (response.success) {
                    $(`#incubator-${incubatorId}`).remove();
                    alert('Incubator deleted successfully.');
                } else {
                    alert('Failed to delete the incubator: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Error deleting incubator.');
                console.error(`Error: ${xhr.status} - ${xhr.statusText}`);
            }
        });
    }
}
                        
                            // Call the function on page load
                            $(document).ready(function() {
                                fetchIncubators();
                            });
                        </script>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End2 -->

        <!-- Footer Start -->
        @include('home.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="home/lib/wow/wow.min.js"></script>
    <script src="home/lib/easing/easing.min.js"></script>
    <script src="home/lib/waypoints/waypoints.min.js"></script>
    <script src="home/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="home/js/main.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>  
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;   
      var pusher = new Pusher('d83fbb312f22af72798e', {
        cluster: 'ap2'
      });   
      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
      });
    </script>
</body>

</html>
