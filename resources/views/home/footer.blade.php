<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYUSH Start-Up Portal</title>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Other meta and stylesheets -->
</head>
<body>
    <div id="footer" class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <!-- Column 1: About AYUSH -->
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">AYUSH Start-Up Portal</h5>
                        <p>We are based on a simple premise – to make fundraising and investing easier for start-ups and investors respectively. Today we are poised to scale private markets on a global level and aim to build the world’s largest ecosystem for founders and investors.</p>
                    </div>
                    
                    <!-- Column 2: Quick Links -->
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    
                    <!-- Column 3: Contact Info -->
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i> 123 Street, chennai,Tamil nadu</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9345678967</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>AYUSH@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://youtube.com"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    
                    <!-- Column 4: Subscribe -->
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Subscribe to AYUSH</h5>
                        <p>Stakeholders can engage in networking, mentorship opportunities, and showcase their innovations globally through virtual connections on the portal.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input id="emailInput" class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" onclick="subscribeEmail()">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">AYUSH Start-Up Portal</a>, All Right Reserved. 
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
    </div>

    <script>
        function subscribeEmail() {
            var email = document.getElementById('emailInput').value;
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/; // Simple email validation

            if (email && emailRegex.test(email)) {
                // Construct the mailto link
                window.location.href = 'mailto:' + email + '?subject=Subscription&body=Thank you for subscribing to AYUSH Start-Up Portal!';
                alert('Subscription successful! You will receive a confirmation email.');
            } else {
                alert("Please enter a valid email address.");
            }
        }
    </script>
</body>
</html>
