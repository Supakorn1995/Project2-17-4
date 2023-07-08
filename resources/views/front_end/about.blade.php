@extends('layouts.master_frontend')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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








@endsection
