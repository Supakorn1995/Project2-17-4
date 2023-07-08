<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> เย็นตาโฟก๋วยเตี้ยวหมูต้มยำ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com " crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

     <!-- Fonts google -->
     <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Mali&display=swap" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- ฟอร์น -->
    <style type ="text/css">
        body{
            font-family: "Sofia", sans-serif;
            font-family: 'Mali', cursive;

        }

        a{

            font-family: cursive;
            font-family: 'Mali', cursive;
        }
        p{
            color: red;
            font-family: courier;
            font-size: 160%;
            font-family: 'Mali', cursive;
            }

        h1{

            font-family: cursive;
            font-family: 'Mali', cursive;

        }
        i{
            coler: red;
            font-family: cursive;
            font-family: 'Mali', cursive;

        }


    </style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i><b>เลขที่ 96/31 หมู่ 6 ซอย กรุงเทพนนท์12 ถ. กรุงเทพ - นนทบุรี นนทบุรี 11000</b></small>

            </div>

        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">


                <h2> <a href="{{ url('/') }}" class="fw-bold text-primary m-6">YenTaFour<span class="text-secondary">ก๋วยเตี๋ยว</span>หมูต้มยำศิริชัย</a></h2>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-5 p-lg-1">
                    <a href="{{ url('/') }}" class="btn btn-success"><br><b>Home</b></br></a>
                    <a href="{{ url('/about') }}" class="btn btn-danger"><br><b>About</a></b></br>
                    <a href="{{ url('/menu') }}" class="btn btn-primary"><br><b>Menu</a></b></br>
                    <a href="{{ url('/contact') }}" class="btn btn-warning"><b><br>Contact</a></b></br>
                </div>
              <span class="nav-text">
                <a href ="{{ route('login')}} " class="btn btn-outline-danger"><b>Login</b></a>
                <a href ="{{ route('register')}}" class="btn btn-outline-info"><b>Register</b></a>
            </span>
            </div>

        </nav>
    </div>
    <!-- Navbar End -->


    @yield ('content')



    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-7">
                <div class="col-lg-3 col-md-6">
                    <h3 class="fw-bold text-primary mb-4">YenTaFour<span class="text-secondary"><br>ก๋วยเตี๋ยวหมูต้มยำ</br></span>ศิริชัย</h3>


                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <i class="fa fa-map-marker-alt me-3"></i><i>เลขที่ 96/31 หมู่ 6 ซอย กรุงเทพนนท์12 ถ. กรุงเทพ - นนทบุรี นนทบุรี 11000</i>
                    <h4 class="text-light mb-4"><br>Phone</h4>
                    <i class="fa fa-phone-alt me-3"></i><i>081-7321-536</i>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <p><a class="btn btn-link" href="{{ url('/about') }}">About Us</a></p>
                    <p><a class="btn btn-link" href="{{ url('/menu') }}">Menu</a></p>
                    <p><a class="btn btn-link" href="{{ url('/contact') }}">Contact</a></p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <i class="icon bi bi-clock flex-shrink-0"></i> Mon-Sat:12.00 A.M.-22.00 p.m.</p>
                    <i class="icon bi bi-clock flex-shrink-0"></i>Sunday : Close</p>

                </div>

            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="https://www3.pongsawadi.ac.th/psc2023/">This WebSite</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Information Technology @PSC
                        <br>Distributed By: <a href="https://www.facebook.com/naon.apolny" target="_blank">Aon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
