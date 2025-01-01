<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ayush</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('home/image/favicon.ico') }}" rel="icon">

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

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

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

        <!--================Header Area =================-->
        @include('home.Wheader')

        <!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('home/image/carousel-1.jpg') }}" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-white animated slideInDown mb-4">Find The Perfect That You Deserved</h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                    <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Detail</a>
                    <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('home/image/carousel-2.jpg') }}" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-white animated slideInDown mb-4">Find The Best Startup That Fit You</h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                    <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Detail</a>
                    <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
        
        <!-- Introduction Section Start -->
        <div class="container-xxl py-5 bg-gradient">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="display-4 text-primary mb-4">Our Mission</h2>
                            <p class="lead mb-4 text-muted">
                                The key objective of the AYUSH portal is to provide a collaborative platform for all stakeholders of AYUSH startups to interact and collaborate in a highly dynamic environment.
                            </p>
                            <p class="lead mb-4 text-muted">
                                Our goal is to enhance and boost the network by bringing together the entire AYUSH startup community at a global level through connections, and mentorship.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="wow fadeInRight" data-wow-delay="0.5s">
                            <img src="{{ asset('home/image/NAM.jpg') }}" alt="Mission Image" class="img-fluid rounded shadow-lg" style="width: 45%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Introduction Section End -->

        <!-- Features Section Start -->
        <div class="container py-5">
            <h2 class="text-center mb-5 text-primary wow fadeInUp" data-wow-delay="0.3s">Features</h2>
            <div class="row">
                <div class="col-lg-4 text-center mb-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon mb-3">
                            <i class="fas fa-users fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Collaborate</h5>
                        <p class="text-muted">Engage with investors, mentors, and incubators within the AYUSH ecosystem.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon mb-3">
                            <i class="fas fa-rocket fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Mentorship</h5>
                        <p class="text-muted">Access mentorship opportunities to guide you in your entrepreneurial journey.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-4">
                    <div class="feature-box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="icon mb-3">
                            <i class="fas fa-chalkboard-teacher fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Funding</h5>
                        <p class="text-muted">Gain valuable Value to you knowledge through investors.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Section End -->

        <!-- Footer -->
        @include('home.footer')

    </div>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-dark btn-lg rounded-circle back-to-top" style="position: fixed; bottom: 50px; right: 50px;">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- WOW.js and Animate CSS Initialization -->
    <script src="{{ asset('home/lib/wow/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
