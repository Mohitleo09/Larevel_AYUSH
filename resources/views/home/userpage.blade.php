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
     <!-- Bootstrap JS and dependencies -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!--================Header Area =================-->
        @include('home.header')
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="home/image/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
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
        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->
        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Resources</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
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
                        <!-- signupadd -->
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
                                                <div class="job-item p-4 mb-4">
                                                    <div class="row g-4">
                                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('${mentor.image}') }}" alt="" style="width: 80px; height: 80px;">
                                                            <div class="text-start ps-4">
                                                                <h5 class="mb-3">${mentor.name}</h5>
                                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>${mentor.city}, ${mentor.state}</span>
                                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>About: ${mentor.about}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                            <div class="d-flex gap-2 mb-3 align-items-center">
                                                                <a class="btn btn-primary px-4 py-2 rounded-pill shadow-sm" href="/chatify/${mentor.id}">
                                                                    <i class="bi bi-chat-fill"></i> Chat 
                                                                </a>
                                                            </div>
                                                                <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ${new Date(mentor.created_at).toLocaleDateString()}</small>
                                                        </div>
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
                            // Call the function on page load
                            $(document).ready(function() {
                                fetchMentors();
                            });
                        </script>
                        <!-- sign end -->
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div id="investor-list">
                                <!-- Dynamic investor items will be loaded here -->
                            </div>
                            {{-- <a class="btn btn-primary py-3 px-5" href="{{ route('investorfulldetail') }}">Browse More Details</a> --}}
                        </div>
                        <!-- Include jQuery if not already included -->
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <!-- investor signup -->
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
                                                <div class="job-item p-4 mb-4">
                                                    <div class="row g-4">
                                                        <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                            <img class="flex-shrink-0 img-fluid border rounded" src="{{ asset('${investor.image}') }}" alt="" style="width: 80px; height: 80px;">
                                                            <div class="text-start ps-4">
                                                                <h5 class="mb-3">${investor.name}</h5>
                                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>${investor.city}, ${investor.state}</span>
                                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>About: ${investor.about}</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                            <div class="d-flex gap-2 mb-3 align-items-center">
                                                                <a class="btn btn-primary px-4 py-2 rounded-pill shadow-sm" href="/chatify/${investor.id}">
                                                                    <i class="bi bi-chat-fill"></i> Chat 
                                                                </a>
                                                            </div>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: ${new Date(investor.created_at).toLocaleDateString()}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;
                                            $('#investor-list').append(investorHtml);
                                        });
                                    },
                                    error: function() {
                                        $('#investor-list').text('Error loading investors.');
                                    }
                                });
                            }
                            // Call the function on page load
                            $(document).ready(function() {
                                fetchInvestors();
                            });
                        </script>
                        <!-- investor signup -->
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
                                                                <h5 class="mb-3">${incubator.name}</h5>
                                                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>${incubator.city}, ${incubator.state}</span>
                                                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>About: ${incubator.about}</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                            <div class="d-flex gap-2 mb-3 align-items-center">
                                                            <a class="btn btn-primary px-4 py-2 rounded-pill shadow-sm" href="/chatify/${incubator.id}">
                                                                <i class="bi bi-chat-fill"></i> Chat 
                                                            </a>
                                                        </div>
                                                            <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Created: ${new Date(incubator.created_at).toLocaleDateString()}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            `;
                                            $('#incubator-list').append(incubatorHtml); // Append incubator data
                                        });
                                    },
                                    error: function() {
                                        $('#incubator-list').text('Error loading incubators.');
                                    }
                                });
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
        <!-- Jobs End -->
        <!-- Footer Start -->
       <!--================Header Area =================-->
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