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


       
           
        
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Add Details</h2>
                    
                </div>
        
                <div class="card">
                    <div class="card-body">
                        
                        
                            
                        <form method="POST" action="{{ route('mentorstore') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="mentor_name">Mentor Name:</label>
                                <input type="text" name="mentor_name" id="mentor_name" class="form-control" placeholder="Enter your name" value="{{ old('mentor_name') }}">
                                @error('mentor_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Contact_Number">Contact Number:</label>
                                <input type="text" name="Contact_Number" id="Contact_Number" class="form-control" placeholder="Enter your number" value="{{ old('Contact_Number') }}">
                                @error('Contact_Number')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gmail">Gmail:</label>
                                <input type="mail" name="gmail" id="gmail" class="form-control" placeholder="Enter your Gmail" value="{{ old('gmail') }}">
                                @error('gmail')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="mentor_city">City:</label>
                                <input type="text" name="mentor_city" id="mentor_city" class="form-control" placeholder="Enter city" value="{{ old('mentor_city') }}">
                                @error('mentor_city')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <label for="mentor_state">State:</label>
                                <input type="text" name="mentor_state" id="mentor_state" class="form-control" placeholder="Enter state" value="{{ old('mentor_state') }}">
                                @error('mentor_state')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="about">About:</label>
                                <input type="text" name="about" id="about" class="form-control" placeholder="Description" value="{{ old('about') }}">
                                @error('about')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>


                            {{-- <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="company">Company:</label>
                                    <select name="company" id="company" class="form-control">
                                        <option value="government"{{ old('company') == '1' ? ' selected' : '' }}>Government</option>
                                        <option value="ideation"{{ old('company') == '2' ? ' selected' : '' }}>Ideation</option>
                                        <option value="startup"{{ old('company') == '3' ? ' selected' : '' }}>Startup</option>
                                        <option value="investment"{{ old('company') == '4' ? ' selected' : '' }}>Investment</option>
                                        <option value="others"{{ old('company') == '5' ? ' selected' : '' }}>Others</option>
                                    </select>
                                    @error('company')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div> --}}
                            </div>
                        <div>
                            <div class="form-group">
                                <label for="mentor_image">Upload Image:</label>
                                <input type="file" name="mentor_image" id="mentor_image" class="form-control-file">
                                @error('mentor_image')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="Save" class="btn btn-success">
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
       

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