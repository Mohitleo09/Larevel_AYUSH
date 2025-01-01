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
    <link href="home/lib/animate/animate.min.css" rel="stylesheet">
    <link href="home/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="home/css/style.css" rel="stylesheet">
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


       
        <div class="container-xxl py-5">
            <div class="container">         
        
                <section class="accomodation_area section_gap">
                    <div class="container">
                        <div class="section_title text-center">
                            <h2 class="title_color">Add Details</h2>
                            
                        </div>
                
                        <div class="card">
                            <div class="card-body">
                                
                                
                                    
                                <form method="POST" action="{{ route('investorstore') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="investor_company_name">Investor Company Name:</label>
                                        <input type="text" name="investor_company_name" id="investor_company_name" class="form-control" placeholder="Enter company name" value="{{ old('investor_company_name') }}">
                                        @error('investor_company_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="investor_city">City:</label>
                                        <input type="text" name="investor_city" id="investor_city" class="form-control" placeholder="Enter city" value="{{ old('investor_city') }}">
                                        @error('investor_city')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="investor_state">State:</label>
                                        <input type="text" name="investor_state" id="investor_state" class="form-control" placeholder="Enter state" value="{{ old('investor_state') }}">
                                        @error('investor_state')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="investor_amount">Amount:</label>
                                        <input type="text" name="investor_amount" id="investor_amount" class="form-control" placeholder="Enter amount" value="{{ old('investor_amount') }}">
                                        @error('investor_amount')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <label for="investor_logo">Upload Company Logo:</label>
                                        <input type="file" name="investor_logo" id="investor_logo" class="form-control-file">
                                        @error('investor_logo')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <input type="submit" value="Save" class="btn btn-success">
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
       

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


    
</body>

</html>