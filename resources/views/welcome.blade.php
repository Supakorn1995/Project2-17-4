@extends('layouts.master_frontend')
@section('content')
<!-- Carousel Start -->


<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend/img/backfood.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-6">

                                    <p class="display-2 mb-3 animated slideInDown">เย็นตาโฟก๋วยเตี๋ยวหมูต้มยำศิริชัย</h5></p>
                                    <br><a href="{{ url('/menu') }}" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Menu</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-1000" src="{{ asset('frontend/img/about01.jpg')}}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="fw-bold text-primary m-0"><br>ร้าน YenTaFour ก๋วยเตี๋ยวหมูต้มยำ ศิริชัย<br></h1>
                    <p class="mb-4"><br> เส้นนุ่มๆ ในน้ำซุปกระดูกหมูร้อนๆ และอีกหลากหลายเมนู ทั้งผัดไทย หอยทอด และกากหมูอีกมาย ชักชวนให้ทุกท่านได้มาลิ้มลองกัน

                                             มีสาขาเดียว ของร้านYentaFour ก๋วยเตี๋ยวหมูต้มยำ ศิริชัย และ การทำอาหารสดใหม่ทุกวัน

                                           ได้รับการยอมรับอย่างดีเรื่อยมา แวะมาลิ้มลองรสชาติและบรรยากาศธรรมดากันได้</br></p>
                    <p><i class="fa fa-check text-primary me-3"></i>ความสะอาด </p>
                    <p><i class="fa fa-check text-primary me-3"></i>อาหารสดและใหม่</p>
                    <p><i class="fa fa-check text-primary me-3"></i>ราคาถูก</p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



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
                        <li class="nav-item ">
                            <a class="btn btn-outline-primary border-2 active show"data-bs-toggle="tab" data-bs-target="#menu-starters01">ก๋วยเตี๋ยว</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="menu-starters01" class="tab-pane fade show p-0 active">
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



    <!-- Product End -->





    <!-- Blog Start -->

    <div class="container-xxl py-5">
    <div class="container-fluid bg-primary bg-icon mt-3 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                <h1 class="display-6 mb-2">รีวิว อาหาร</h1>

            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('frontend/img/รีวิว1.jpg')}}" alt="">
                    <div class="bg-light p-4">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <i class="bi bi-quote quote-icon-left"></i>
                        <a class="d-block h5 lh-base mb-4" ><b>''เลือกเลยครับไม่ต้องกลัวไม่อร่อย อร่อยหมดทุกเมนูเลยครับ  ''</b></a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Nopadol Daengklad</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>14 Feb,2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid" src="{{ asset('frontend/img/review2.2.jpg')}}" alt="">
                    <div class="bg-light p-4">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                        <a class="d-block h5 lh-base mb-4" href=""> '' รับรองความอร่อยได้เยี่ยม เส้นนุ่ม หอมกลิ่นกระดูกหมู ''</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Artidon Keatichonkarn</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>18 Feb 2023</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('frontend/img/รีวิว3.jpg')}}" alt="">
                    <div class="bg-light p-4">
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                        <a class="d-block h5 lh-base mb-4" href="">"น้ำซุป กรุ๊บกร่อม อร่อยตามคำลำลือ แม้มีจะลูกค้าเยอะแต่แม่ค้าก็ทำไวเกิ๊น"</a>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Supakorn Suwannasin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>18 May, 2023</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Blog End -->
@endsection
