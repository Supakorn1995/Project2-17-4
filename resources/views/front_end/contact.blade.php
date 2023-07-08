@extends('layouts.master_frontend')
@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Contact</h1>
                <p></p>
            </div>
            <div class="row g-5 justify-content-center">
    <!-- Google Map Start -->
    <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d763.1680857161429!2d100.51643726598948!3d13.839247359675891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b0cab17b829%3A0x910baa44ebcdb840!2z4LmA4Lii4LmH4LiZ4LmC4LiV4LmC4LifIOC4geC5i-C4p-C4ouC5gOC4leC4teC5i-C4ouC4p_CfkLfguJXguYnguKHguKLguLM!5e0!3m2!1sth!2sth!4v1673684499529!5m2!1sth!2sth" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        </div>
    <!-- Google Map End -->
                   <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                        <h5 class="text-warning">Address</h5>
                        <p class="text-white mb-5"><i class="fa fa-map-marker-alt me-3"></i>เลขที่ 96/31 หมู่ 6 ซอย กรุงเทพนนท์12 ถ. กรุงเทพ - นนทบุรี นนทบุรี 11000</p>
                        <h5 class="text-warning">Call Us</h5>
                        <p class="text-white mb-5"><i class="fa fa-phone-alt me-3"></i>081-7321-536</p>
                    </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->








@endsection
