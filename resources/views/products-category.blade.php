@extends('layouts.master')
@section('title')
    Products Category
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="section ecommerce-about"
        style="background-image: url('build/images/profile-bg.jpg'); background-size: cover; background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white lh-base text-capitalize">Categories</h1>
                        <p class="text-white-75 fs-15 mb-0">Our all categories wise product available here.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h2 class="mb-3">Classic</h2>
                        <p class="text-muted fs-15 mb-0">Browser the collection of top categories.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
<!-------------------------------------category--------------------------------------------------------------------------->

        {{dump($cat)  }}

<!-------------------------------------end category --------------------------------------------------------------->
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h2 class="mb-3">Default</h2>
                        <p class="text-muted fs-15 mb-0">Browser the collection of top categories.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <div class="container-fluid">
            <div class="row gy-4">
                <div class="col-xxl-4 col-md-6">
                    <a href="product-list-defualt"
                        class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-3.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="bg-overlay blue"></div>
                        <div class="product-content p-4">
                            <p class="text-uppercase fw-semibold text-white fs-15 mb-2">Up to 50-70%</p>
                            <h1 class="text-white lh-base ff-secondary display-5"> Women's Sportwere Sales</h1>
                            <div class="product-btn text-white mt-4">
                                Shop Now <i class="bi bi-arrow-right ms-2"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-md-6">
                    <a href="product-list-defualt"
                        class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block right">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-2.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="bg-overlay"></div>
                        <div class="product-content p-4 text-end">
                            <p class="text-uppercase text-white fw-semibold fs-15 mb-2">MEGA SALE</p>
                            <h1 class="text-white lh-base ff-secondary display-5">Running Shoes Sales Up to 50%</h1>
                            <div class="product-btn mt-4 text-white">
                                Shop Now <i class="bi bi-arrow-right ms-2"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-md-6">
                    <a href="product-grid-defualt"
                        class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-1.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="product-content p-4">
                            <p class="text-uppercase fw-semibold text-secondary fs-15 mb-2">Summer Sales</p>
                            <h1 class="lh-base ff-secondary display-5">Trendy Fashion Clothes</h1>
                            <div class="product-btn text-primary mt-4">
                                Shop Now <i class="bi bi-arrow-right ms-2"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3">Ellips</h3>
                        <p class="text-muted fs-14 mb-0">Browser the collection of top categories.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
<!--end row-->
<!-------------------------------------category pour des moments occasionnels-------------------------------------------------->
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt=""
                            class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Clothes</h5>
                            </a>
                            <p class="text-muted fs-12">96 Products</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/img-20.png') }}" alt=""
                            class="img-fluid rounded-circle bg-dark-subtle border border-2 border-dark border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Electronics</h5>
                            </a>
                            <p class="text-muted fs-12">25 Products</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/img-18.png') }}" alt=""
                            class="img-fluid rounded-circle bg-warning-subtle border border-2 border-warning border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Cosmetic</h5>
                            </a>
                            <p class="text-muted fs-12">10 Products</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt=""
                            class="img-fluid rounded-circle bg-danger-subtle border border-2 border-danger border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Bags</h5>
                            </a>
                            <p class="text-muted fs-12">58 Products</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/img-15.png') }}" alt=""
                            class="img-fluid rounded-circle bg-info-subtle border border-2 border-info border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Handbags & Clutches</h5>
                            </a>
                            <p class="text-muted fs-12">64 Products</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="text-center">
                        <img src="{{ URL::asset('build/images/products/img-5.png') }}" alt=""
                            class="img-fluid rounded-circle bg-danger-subtle border border-2 border-danger border-opacity-10 p-4">
                        <div class="mt-4">
                            <a href="#!">
                                <h5 class="mb-2 fs-15">Footwear</h5>
                            </a>
                            <p class="text-muted fs-12">342 Products</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
<!-------------------------------------------end category--------------------------------------------------------------------------->
        </div>
        <!--end conatiner-->
    </section>

    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3">Slider Products</h3>
                        <p class="text-muted fs-14 mb-0">Browser the collection of top categories.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper mySwiper" dir="ltr">
                        <div class="swiper-wrapper py-4">
                            <div class="swiper-slide">
                                <div class="card card-animate overflow-hidden">
                                    <div class="bg-dark-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-15.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="product-list" class="stretched-link">
                                            <h6 class="fs-16 lh-base text-truncate">Handbags & Clutches</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-animate overflow-hidden">
                                    <div class="bg-dark-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-17.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="product-list" class="stretched-link">
                                            <h6 class="fs-16 lh-base text-truncate">Electronics</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-animate overflow-hidden">
                                    <div class="bg-success-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-4.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="product-list" class="stretched-link">
                                            <h6 class="fs-16 lh-base text-truncate">Footwear</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-animate overflow-hidden">
                                    <div class="bg-danger-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-12.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="product-list" class="stretched-link">
                                            <h6 class="fs-16 lh-base text-truncate">Furniture & Decor</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-animate overflow-hidden">
                                    <div class="bg-warning-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-18.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="product-list" class="stretched-link">
                                            <h6 class="fs-16 lh-base text-truncate">Beauty, Health, Grocery</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-animate overflow-hidden">
                                    <div class="bg-dark-subtle rounded-top py-4">
                                        <div class="gallery-product">
                                            <img src="{{ URL::asset('build/images/products/img-9.png') }}" alt=""
                                                style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <a href="product-list" class="stretched-link">
                                            <h6 class="fs-16 lh-base text-truncate">Men's Accessories</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h2 class="mb-3">Masonry</h2>
                        <p class="text-muted fs-15 mb-0">Browser the collection of top categories.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row g-2">
                <div class="col-lg-7">
                    <div class="card card-height-100">
                        <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                            <div class="categrory-content text-center">
                                <span class="categrory-text text-white fs-18">Electronics</span>
                            </div>
                            <img src="{{ URL::asset('build/images/ecommerce/instagram/img-1.jpg') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-5">
                    <div class="row g-2">
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                                    <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Cosmetics</span>
                                    </div>
                                    <img src="{{ URL::asset('build/images/ecommerce/instagram/img-2.jpg') }}"
                                        class="w-100 object-fit-cover" alt="" style="max-height: 318px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <a href="product-list-defualt" class="insta-img categrory-box rounded-3">
                                    <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Handbags & Clutches</span>
                                    </div>
                                    <img src="{{ URL::asset('build/images/ecommerce/instagram/img-5.jpg') }}"
                                        class="w-100 object-fit-cover" alt="" style="max-height: 318px;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section"
        style="background-image: url('build/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white lh-base text-capitalize">Don't miss out on special offers</h1>
                        <p class="text-white-75 fs-15 mb-4 pb-2">Never Miss Anything From Toner By Signing Up To Our
                            Newsletter.</p>
                        <form action="#!">
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" class="form-control rounded-pill border-0"
                                    placeholder="Enter your email">
                                <button type="submit" class="btn btn-darken-primary rounded-pill">Subscript Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative py-5">
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
                </div>
                <!--end col-->
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
                </div>
                <!--end col-->
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/guarantee-certificate.png') }}" alt=""
                                class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Money Back Guarantee</h5>
                            <p class="text-muted mb-0">Within 5 business days</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
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
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
@endsection
@section('scripts')
    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/category.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
