@extends('layouts.master_frontend')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Menu</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

<!-- Product Start -->

<div class="container-xxl py-5">
        <div class="container">
        <div class="container-vegetable bg-light bg-icon mt-5 py-6">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">รายการอาหาร</h1>

                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary border-2 active"data-bs-toggle="tab" data-bs-target="#tap-1">ก๋วยเตี๋ยว</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tap-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/หมูแดงต้มยำ.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                     <p class="d-block h5 mb-2" href="">ก๋วยเตี๋ยวหมูแดงต้มยำ</p></b>
                                    <span class="text-primary me-1">50.00 Bath</span>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/ก๋วยเตี๋ยวน้ำใส.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">ก๋วยเตี๋ยวน้ำใส</a>
                                    <span class="text-primary me-1">50.00 Bath</span>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/มาม่าหมูต้มยำ.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">มาม่าหมูต้มยำ</a>
                                    <span class="text-primary me-1">50.00 Bath</span>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/เย็นตาโฟต้มยำ.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">เย็นตาโฟต้มยำ</a>
                                    <span class="text-primary me-1">60.00 Bath</span>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('frontend/img/เย็นตาโฟ.jpg')}}" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">เย็นตาโฟ</a>
                                    <span class="text-primary me-1">40.00 Bath</span>

                                </div>

                            </div>
                        </div>






                    </div>
                </div>

            </div>

    </div>

        </div>
</div>







@endsection
