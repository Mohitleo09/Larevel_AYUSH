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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/home/css/all.min.css" rel="stylesheet">
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
        {{-- <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> --}}


      <!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
        <h1 class="m-0 text-primary">AYUSH {{ Auth::user()->user_type }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link">Home</a>
            <a href="about.html" class="nav-item nav-link">About</a>
            <a href="{{ route('investoradd') }}" class="nav-item nav-link">Add details</a>
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Jobs</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="job-list.html" class="dropdown-item active">Job List</a>
                    <a href="job-detail.html" class="dropdown-item">Job Detail</a>
                    <a href="form.php" class="dropdown-item">Job Apply</a>
                    <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->

                </div>
            </div>
            <a href="history.php" class="nav-item nav-link">History</a>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <div class="nav-item dropdown">
            <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" style="color: #ffffff;" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="update_profile.php" class="dropdown-item">Edit</a>
                    {{-- <a href="{{ route('logout') }}" class="dropdown-item">Logout</a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button> <!-- Logout option -->
                    </form>

                </div>
            </div>
    </div>
</nav>
<!-- Navbar End -->

       
           
<div class="container-xxl py-5">
    <div class="container">     
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Edit Details</h2>
                    
                </div>
        
                <div class="card">
                    <div class="card-body">
                        
                        
                        <form method="POST" action="{{ route('investorupdate', ['id' => $investor->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="investor_company_name">Company Name:</label>
                                <input type="text" name="investor_company_name" id="investor_company_name" class="form-control" value="{{ old('investor_company_name', $investor->investor_company_name) }}">
                                @error('investor_company_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="investor_city">City:</label>
                                <input type="text" name="investor_city" id="investor_city" class="form-control" value="{{ old('investor_city', $investor->investor_city) }}">
                                @error('investor_city')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="investor_state">State:</label>
                                <input type="text" name="investor_state" id="investor_state" class="form-control" value="{{ old('investor_state', $investor->investor_state) }}">
                                @error('investor_state')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="investor_amount">Amount:</label>
                                <input type="text" name="investor_amount" id="investor_amount" class="form-control" value="{{ old('investor_amount', $investor->investor_amount) }}">
                                @error('investor_amount')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="investor_logo">Previous Image:</label><br>
                                @if($investor->investor_logo)
                                    <img src="{{ asset($investor->investor_logo) }}" alt="Previous Image" style="max-width: 200px;">
                                @else
                                    <span>No previous image available</span>
                                @endif
                            </div>

                            
                        
                            <div class="form-group">
                                <label for="investor_logo">Upload New Image:</label>
                                <input type="file" name="investor_logo" id="investor_logo" class="form-control-file">
                                @error('investor_logo')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>


                            
                        
                            <input type="submit" value="Update" class="btn btn-success">
                            <a href="{{ url('/investoradd') }}" class="btn btn-primary">Cancel</a>
                            
                        </form>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>    
       

        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('home/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('home/js/main.js') }}"></script>



    
</body>

</html>