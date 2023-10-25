@extends('layouts.master')
@section('title')
    Watch Main Layout
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    
    <section class="watch-layout">
            <div class="bg-overlay bg-dark bg-opacity-75"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="text-white fw-medium text-capitalize display-5 lh-base mb-3">Smart watch you should wear every day</h1>
                        <p class="text-white opacity-75 fs-17 fw-normal mb-4">As a mobile command center smartwatch's allows you to monitor the information received by the smartphone, and optionally analyze your condition and health in real time.</p>
                        <div class="pt-2">
                            <a href="product-list-right" class="btn btn-danger btn-hover">Shop Now <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end home-->

        <div class="mt-n5 position-relative">
            <div class="container">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <div class="row justify-content-center">
                            <div class="col-xxl-2 col-lg-3 col-sm-6">
                                <div class="px-4 m-2">
                                    <a href="#!" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Shopify"><img src="{{ URL::asset('build/images/clients/shopify.svg') }}" alt="" height="28"></a>
                                </div>
                            </div><!--end col-->
                            <div class="col-xxl-2 col-lg-3 col-sm-6">
                                <div class="px-4 m-2">
                                    <a href="#!" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Google"><img src="{{ URL::asset('build/images/clients/google.svg') }}" alt="" height="28"></a>
                                </div>
                            </div><!--end col-->
                            <div class="col-xxl-2 col-lg-3 col-sm-6">
                                <div class="px-4 m-2">
                                    <a href="#!" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="PayPal"><img src="{{ URL::asset('build/images/clients/paypal.svg') }}" alt="" height="28"></a>
                                </div>
                            </div><!--end col-->
                            <div class="col-xxl-2 col-lg-3 col-sm-6">
                                <div class="px-4 m-2">
                                    <a href="#!" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Amazon"><img src="{{ URL::asset('build/images/clients/amazon.svg') }}" alt="" height="28"></a>
                                </div>
                            </div><!--end col-->
                            <div class="col-xxl-2 col-lg-3 col-sm-6">
                                <div class="px-4 m-2">
                                    <a href="#!" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Walmart"><img src="{{ URL::asset('build/images/clients/walmart.svg') }}" alt="" height="28"></a>
                                </div>
                            </div><!--end col-->
                            <div class="col-xxl-2 col-lg-3 col-sm-6">
                                <div class="px-4 m-2">
                                    <a href="#!" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Verizon"><img src="{{ URL::asset('build/images/clients/verizon.svg') }}" alt="" height="28"></a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end container-->
        </div>

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-content text-center mb-5">
                            <h2 class="title fw-normal">Our <b>Watch Collections</b></h2>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-animate watch-category-widgets">
                            <div class="card-body p-2">
                                <div class="bg-light">
                                    <img src="{{ URL::asset('build/images/watch/products/img-07.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="category-btn mx-3 pb-3">
                                    <a href="#!" class="btn btn-danger stretched-link w-100">Fancy Watches</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-animate watch-category-widgets">
                            <div class="card-body p-2">
                                <div class="bg-light">
                                    <img src="{{ URL::asset('build/images/watch/products/img-01.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="category-btn mx-3 pb-3">
                                    <a href="#!" class="btn btn-danger stretched-link w-100">Women's Watches</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-animate watch-category-widgets">
                            <div class="card-body p-2">
                                <div class="bg-light">
                                    <img src="{{ URL::asset('build/images/watch/products/img-04.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="category-btn mx-3 pb-3">
                                    <a href="#!" class="btn btn-danger stretched-link w-100">Men's Watches</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-animate watch-category-widgets">
                            <div class="card-body p-2">
                                <div class="bg-light">
                                    <img src="{{ URL::asset('build/images/watch/products/img-06.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="category-btn mx-3 pb-3">
                                    <a href="#!" class="btn btn-danger stretched-link w-100">Smartwatch's</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-fluid-->
        </section>
        <!--end watch collocations-->

        <section class="section pt-4">
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-xxl-5">
                        <div class="section-content">
                            <p class="fs-15 mb-2">Why Choose Toner Shop ?</p>
                            <h2 class="title text-capitalize lh-base fw-normal mb-3">Committed to the <b>best quality</b> and results</h2>
                            <p class="text-muted fs-15">Luxury watches are more expensive because of the time and extensive effort it takes to make them, but also because of the parts that are used in their manufacture.</p>
                            <ul class="list-unstyled vstack gap-2 fs-15 mb-4">
                                <li>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <i class="bi bi-caret-right"></i>
                                        </div>
                                        <p class="mb-0">Water resistant up to 50M</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <i class="bi bi-caret-right"></i>
                                        </div>
                                        <p class="mb-0">Music & volume controls</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div>
                                            <i class="bi bi-caret-right"></i>
                                        </div>
                                        <p class="mb-0">Daily activity tracker</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="product-list-right" class="btn btn-danger btn-hover">Shop Now <i class="bi bi-arrow-right align-baseline ms-2"></i></a>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-6 ms-auto">
                        <div class="about-watch text-center">
                            <img src="{{ URL::asset('build/images/watch/products/img-05.png') }}" alt="">
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!--end about-->

        <!--start video cta-->
        <section class="watch-cta position-relative">
            <div class="bg-overlay bg-dark"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center">
                            <p class="fs-20 text-white">Product Features Demo</p>
                            <h2 class="title text-capitalize text-white lh-base fw-normal mb-0">Get product more information for the video</h2>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>

        <div class="container video-card">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <img src="{{ URL::asset('build/images/watch/video-img.jpg') }}" alt="" class="img-fluid object-fit-cover rounded-4">

                    <div class="video-main">
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark btn-icon rounded-circle" data-bs-toggle="modal" data-bs-target="#videoPlay"><i class="ph ph-play"></i></button>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!--end video cta-->

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-content text-center mb-5 pb-3">
                            <h2 class="title text-capitalize fw-normal">We have <b>quality</b> Products</h2>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <span class="badge bg-danger-subtle text-danger fs-12 position-absolute top-0 end-0 start-0 rounded-bottom-0">Sale up to 30%</span>
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-01.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">New Stylish men's wrist watch</a></h6>
                                        <p class="mb-0 fs-16">$241.99 <small class="text-decoration-line-through fs-13 text-muted">328.19</small></p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-02.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">Full Black Fancy Watch</a></h6>
                                        <p class="mb-0 fs-16">$179.65</p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark active" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-03.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">Limited Edition Watch For Men</a></h6>
                                        <p class="mb-0 fs-16">$349.49</p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-04.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">Timer Furious Casual Analog Watch</a></h6>
                                        <p class="mb-0 fs-16">$197.45</p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark active" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-06.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">Fire-boltt Ninja Pro Max Smartwatch</a></h6>
                                        <p class="mb-0 fs-16">$179.37</p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <span class="badge bg-danger-subtle text-danger fs-12 position-absolute top-0 end-0 start-0 rounded-bottom-0">Sale up to 15%</span>
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-07.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">Swiss Track Analog Watch</a></h6>
                                        <p class="mb-0 fs-16">$209.49 <small class="text-decoration-line-through fs-13 text-muted">349.99</small></p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-08.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">Digital Watch in shoppry Mego</a></h6>
                                        <p class="mb-0 fs-16">$147.32</p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card watch-product text-center border-0 card-animate overflow-hidden">
                            <div class="card-body pt-4">
                                <div class="pt-2">
                                    <img src="{{ URL::asset('build/images/watch/products/img-09.png') }}" alt="" class="img-fluid">
                                    <div class="mt-4">
                                        <h6 class="fs-15 text-capitalize text-truncate"><a href="#!" class="text-reset">Swiss Track Analog Watch</a></h6>
                                        <p class="mb-0 fs-16">$357.48</p>
                                    </div>
                                    <ul class="watch-widgets-menu hstack justify-content-center gap-2 list-unstyled position-absolute mb-0">
                                        <li>
                                            <a href="#!" class="rounded bookmark" data-bs-toggle="button"><i class="bi bi-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="shop-cart" class="rounded"><i class="bi bi-bag"></i></a>
                                        </li>
                                        <li>
                                            <a href="product-details" class="rounded"><i class="bi bi-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>

        <section class="section bg-light">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="text-center mb-5">
                            <h3>What Customers Say About Us</h3>
                            <p class="text-muted fs-15">A customer is a person or business that buys goods or services from another business. Customers are crucial because they generate revenue.</p>
                        </div>
                    </div><!--end col-->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Swiper -->
                        <div class="swiper feedback-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <i class="bi bi-quote position-absolute end-0 top-0 display-3 text-primary" style="--tb-text-opacity: 0.10;"></i>
                                            <div class="mb-2 text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <h5 class="mb-3">Code Quality</h5>
                                            <p class="fs-16 text-muted mb-4">" Great job on the <b>code quality</b>! Your attention to detail and dedication to producing clean, well-structured, and efficient code is impressive. Keep up the excellent work! "</p>
                                            <div class="d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6>Zebra Fashion</h6>
                                                    </a>
                                                    <p class="text-muted fs-14 mb-0">Founder & Owner</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-->
                                </div><!--end slide-->
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <i class="bi bi-quote position-absolute end-0 top-0 display-3 text-primary" style="--tb-text-opacity: 0.10;"></i>
                                            <div class="mb-2 text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <h5 class="mb-3">Design Quality</h5>
                                            <p class="text-muted fs-16 mb-4">" Awesome! It is a high quality HTML template, I suggest two things, please add Angular version as Default with HTML version and Please try to add LMS part. Thanks "</p>
                                            <div class="d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6>James Bowen</h6>
                                                    </a>
                                                    <p class="text-muted fs-14 mb-0">Web Development</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <i class="bi bi-quote position-absolute end-0 top-0 display-3 text-primary" style="--tb-text-opacity: 0.10;"></i>
                                            <div class="mb-2 text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <h5 class="mb-3">Customer Support</h5>
                                            <p class="text-muted fs-16 mb-4">" High theme quality. Very good support, they spent almost an hour remotely to fix a problem. I hope this theme will have a long term support. Great Admin template comes in handy... :) "</p>
                                            <div class="d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6>Alex Smith</h6>
                                                    </a>
                                                    <p class="text-muted fs-14 mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <i class="bi bi-quote position-absolute end-0 top-0 display-3 text-primary" style="--tb-text-opacity: 0.10;"></i>
                                            <div class="mb-2 text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <h5 class="mb-3">Feature Availability</h5>
                                            <p class="text-muted fs-16 mb-4">" Hello everyone, I would like to suggest here two contents that you could create. Course pages and blog pages. In them you could insert the listing and management of courses. "</p>
                                            <div class="d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6>Ayaan Bowen</h6>
                                                    </a>
                                                    <p class="fs-14 text-muted mb-0">Fashion Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                                <div class="swiper-slide">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <i class="bi bi-quote position-absolute end-0 top-0 display-3 text-primary" style="--tb-text-opacity: 0.10;"></i>
                                            <div class="mb-2 text-warning">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <h5 class="mb-3">Design Quality</h5>
                                            <p class="text-muted fs-16 mb-4">" Thank you for supporting CakePHP 4, we have purchased the template because of this support, please push forward more integration. The template is very complete as an admin panel. "</p>
                                            <div class="d-flex gap-3">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="" class="avatar-sm rounded">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <a href="#!">
                                                        <h6>Pitch Fashion</h6>
                                                    </a>
                                                    <p class="text-muted fs-14 mb-0">Web Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end card-->
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div><!---end col-->
                </div><!--end row-->
            </div><!--end container-fluid-->
        </section>

        <!-- START Instagram shop -->
        <section class="section">
            <div class="container-fluid container-custom">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-content text-center mb-5 pb-3">
                            <h2 class="title fw-normal mb-3"><span>Instagram Shop by <span class="fw-semibold">@shoppry</span></span></h2>
                            <p class="text-muted fs-16 mb-0">Shop your favorite styles from Instagram.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row g-3">
                    <div class="col-xxl-2 col-lg-3 col-md-6 d-none d-xxl-block">
                        <div class="position-relative">
                            <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Women Fashion" data-bs-content="One or two brand names can look classy, but too many can detract from the sophistication you're going for.">
                                <i class="ph-plus-bold"></i>
                            </a>
                            <img src="{{ URL::asset('build/images/instgram/img-01.jpg') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-2 col-lg-3 col-md-6">
                        <div class="position-relative">
                            <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Unique Fashion" data-bs-content="A capsule collection is essentially a condensed version of a designer's vision">
                                <i class="ph-plus-bold"></i>
                            </a>
                            <img src="{{ URL::asset('build/images/instgram/img-02.jpg') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-2 col-lg-3 col-md-6">
                        <div class="position-relative">
                            <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Men'swear" data-bs-content="Yours may consist of traditional pieces, such as tops, bottoms, and outerwear, or focus on a single product">
                                <i class="ph-plus-bold"></i>
                            </a>
                            <img src="{{ URL::asset('build/images/instgram/img-03.jpg') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-2 col-lg-3 col-md-6 d-none d-xxl-block">
                        <div class="position-relative">
                            <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Sportwear" data-bs-content="Typical sport-specific garments include tracksuits, shorts, T-shirts and polo shirts.">
                                <i class="ph-plus-bold"></i>
                            </a>
                            <img src="{{ URL::asset('build/images/instgram/img-04.jpg') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-2 col-lg-3 col-md-6">
                        <div class="position-relative">
                            <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Women Fashion" data-bs-content="One or two brand names can look classy, but too many can detract from the sophistication you're going for.">
                                <i class="ph-plus-bold"></i>
                            </a>
                            <img src="{{ URL::asset('build/images/instgram/img-05.jpg') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div><!--end col-->
                    <div class="col-xxl-2 col-lg-3 col-md-6">
                        <div class="position-relative">
                            <a href="#!" class="btn btn-light btn-icon btn-sm rounded-circle position-absolute bottom-0 end-0 m-3" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Footwear" data-bs-content="Footwear refers to garments worn on the feet, which typically serves the purpose of protection against adversities.">
                                <i class="ph-plus-bold"></i>
                            </a>
                            <img src="{{ URL::asset('build/images/instgram/img-06.jpg') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-fluid-->
        </section><!--end instagram shop-->

        <!--start cta-->
        <section class="position-relative border-top py-5">
            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-lg-3 col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="flex-shrink-0">
                                <img src="{{ URL::asset('build/images/ecommerce/fast-delivery.png') }}" alt="" class="avatar-sm">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                                <p class="text-muted mb-0">Tell about your service.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="flex-shrink-0">
                                <img src="{{ URL::asset('build/images/ecommerce/returns.png') }}" alt="" class="avatar-sm">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">2 Days Return Policy</h5>
                                <p class="text-muted mb-0">No question ask.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="flex-shrink-0">
                                <img src="{{ URL::asset('build/images/ecommerce/guarantee-certificate.png') }}" alt="" class="avatar-sm">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">Money Back Guarantee</h5>
                                <p class="text-muted mb-0">Within 5 business days</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="flex-shrink-0">
                                <img src="{{ URL::asset('build/images/ecommerce/24-hours-support.png') }}" alt="" class="avatar-sm">
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fs-15">24 X 7 Service</h5>
                                <p class="text-muted mb-0">Online service for customer</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!--end cta-->

         <!-- Modal -->
        <div class="modal fade" id="videoPlay" tabindex="-1" aria-labelledby="videoPlayLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded" src="https://www.youtube.com/embed/Z-fV2lGKnnU" title="YouTube video" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('scripts')

    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/watch-demo.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
