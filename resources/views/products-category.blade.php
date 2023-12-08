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
                        <p class="text-white-75 fs-15 mb-0">Tous nos sous catégories classé par catégories sont disponibles ici.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section>
        <div class="container">
            <!--end row-->
            <br>
            <br>
            <!-------------------------------------category--------------------------------------------------------------------------->
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="text-center">
                            <img src="{{ asset('build/images/products/'.$category->image) }}" alt=""
                                 class="img-fluid rounded-circle bg-warning-subtle border border-20 border-warning border-opacity-8 p-15">
                            <div class="mt-4">
                                    <h5 class="fs-15 mb-0">{{$category->title}}</h5>
                               <br>
                                <h6 class="fs-15 mb-0">{{$category->description}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--end col-->
            </div>
            <!-------------------------------------------end category------------------------------------------------------------------>
        </div><!--end conatiner-->
    </section>
    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <br>
                        <br>
                        <h2 class="mb-3">TOP PRODUITS PARMIS NOS CATEGORIES</h2>
                        <p class="text-muted fs-15 mb-0">Naviguer dans la collection des principales catégories.</p>
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
                    <a href="{{route('products_left')}}"
                       class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-3.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="bg-overlay blue"></div>
                        <div class="product-content p-4">
                            <p class="text-uppercase fw-semibold text-white fs-15 mb-2">Jusqu'a 50-70% de reduction</p>
                            <h1 class="text-white lh-base ff-secondary display-5">Vetement de sport pour Femme en vente</h1>
                            <div class="product-btn text-white mt-4">
                                Acheter Maintenant <i class="bi bi-arrow-right ms-2"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-md-6">
                    <a href="{{route('products_left')}}"
                       class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block right">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-2.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="bg-overlay"></div>
                        <div class="product-content p-4 text-end">
                            <p class="text-uppercase text-white fw-semibold fs-15 mb-2">MEGA SALE</p>
                            <h1 class="text-white lh-base ff-secondary display-5">Basket pour courir jusqu'a 50% de reduction</h1>
                            <div class="product-btn mt-4 text-white">
                                Acheter Maintenant <i class="bi bi-arrow-right ms-2"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-md-6">
                    <a href="{{route('products_left')}}"
                       class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-1.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="product-content p-4">
                            <p class="text-uppercase fw-semibold text-secondary fs-15 mb-2">Summer Sales</p>
                            <h1 class="lh-base ff-secondary display-5">Vêtements à la mode</h1>
                            <div class="product-btn text-primary mt-4">
                                Acheter Maintenant <i class="bi bi-arrow-right ms-2"></i>
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


    <section class="section pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mb-5 text-center">
                        <h3 class="mb-3">Slider Sous Categories</h3>
                        <p class="text-muted fs-14 mb-0">Naviguer parmis nos top categories.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper mySwiper" dir="ltr">

                                                <div class="swiper-wrapper py-4">
{{--                            @foreach($sub_cat as $subCategory)--}}
                                @foreach($sous_categories as $sous_category)
                                    <div class="swiper-slide">
                                        <div class="card card-animate overflow-hidden">
                                            <div class="bg-dark-subtle rounded-top py-4">
                                                <div class="gallery-product">
                                                    <a href="{{ route('products_nav', ['sub_category_id' => $sous_category->id]) }}" class="d-flex py-1 align-items-center custom-link">
                                                        <img src="{{ URL::asset('build/images/products/'.$sous_category->image) }}" alt=""
                                                             style="max-height: 215px; max-width: 100%;" class="mx-auto d-block">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-body text-center">
                                                <a href="{{ route('products_nav', ['sub_category_id' => $sous_category->id]) }}" class="stretched-link">
                                                    <h6 class="fs-16 lh-base text-truncate">{{$sous_category->title}}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
{{--                            @endforeach--}}
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
                        <h2 class="mb-3">Les plus demandees</h2>
                        <p class="text-muted fs-15 mb-0">Naviguer a travers nos top categories.</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row g-2">
                <div class="col-lg-7">
                    <div class="card card-height-100">
                        <a href="{{route('products_left')}}" class="insta-img categrory-box rounded-3">
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
                                <a href="{{route('products_left')}}" class="insta-img categrory-box rounded-3">
                                    <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Beauty</span>
                                    </div>
                                    <img src="{{ URL::asset('build/images/ecommerce/instagram/img-2.jpg') }}"
                                         class="w-100 object-fit-cover" alt="" style="max-height: 318px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <a href="{{route('products_left')}}" class="insta-img categrory-box rounded-3">
                                    <div class="categrory-content text-center">
                                        <span class="categrory-text text-white fs-18">Clothes</span>
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

    <section class="section" style="background-image: url('build/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white lh-base text-capitalize">Ne manquez pas nos offres speciaux</h1>
                        <p class="text-white-75 fs-15 mb-4 pb-2">Ne manquez rien de Bel Mache En signat a notre
                            boite de nouvelle.</p>
                        <form id="subscribe-form" action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" name="email" class="form-control rounded-pill" placeholder="Entrer votre email" required>
                                <button type="submit" class="btn btn-primary btn-hover rounded-pill">Abonnez-vous Maintenant</button>
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
