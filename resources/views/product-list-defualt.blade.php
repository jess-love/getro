@extends('layouts.master')
@section('title')
    Product List
@endsection
@section('css')
    <!-- extra css -->
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/nouislider/nouislider.min.css') }}">
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/mermaid.min.css') }}">
@endsection
@section('content')
    <section class="section pb-0 mt-4">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="product-banner-1 mt-3 mt-lg-0 rounded overflow-hidden">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-3.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="bg-overlay blue"></div>
                        <div class="product-content p-4">
                            <p class="text-uppercase fw-semibold text-white mb-2">Up to 50-70%</p>
                            <h1 class="text-white lh-base ff-secondary display-6 display-xl-5"> Women's Sportwere Sales</h1>
                            <div class="product-btn mt-3 mt-xl-4">
                                <a href="product-list-defualt" class="link-effect link-light text-white fs-14">Shop Now <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden right">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-2.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="bg-overlay"></div>
                        <div class="product-content p-4 text-end">
                            <p class="text-uppercase text-white fw-semibold mb-2">MEGA SALE</p>
                            <h1 class="text-white lh-base ff-secondary display-6 display-xl-5">Running Shoes Sales Up to 50%
                            </h1>
                            <div class="product-btn mt-3 mt-xl-4">
                                <a href="product-list-sidebar-banner" class="link-effect link-light text-white fs-14">Shop Now <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4 col-md-6">
                    <div class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden">
                        <img src="{{ URL::asset('build/images/ecommerce/features/img-1.jpg') }}" class="img-fluid rounded" alt="">
                        <div class="product-content p-4">
                            <p class="text-uppercase fw-semibold text-dark mb-2">Summer Sales</p>
                            <h1 class="lh-base ff-secondary display-6 display-xl-5">Trendy Fashion Clothes</h1>
                            <div class="product-btn mt-3 mt-xl-4">
                                <a href="product-list-right" class="link-effect link-primary fs-14">Shop Now <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-fluid-->
    </section>

    <section class="position-relative section">
        <div class="container">
            <div class="ecommerce-product gap-4">
                <div class="sidebar small-sidebar flex-shrink-0">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16 mb-0">Filters</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion accordion-flush filter-accordion">
                            <div class="card-body border-bottom">
                               
                                    <p class="text-muted text-uppercase fs-12 fw-medium mb-3">Category Products</p>
                                    <ul class="list-unstyled mb-0 filter-list">
 <!-- ************************************************Jessy's adding start********************************************************************************************* -->
                                       
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">grocery</h5>
                                                </div>
                                            </a>
                                        </li>
                                        
<!-- ****************************************************Jessy's adding end***************************************************************************************** -->
 
                                        <!-- <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Fashion</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">5</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Watches</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Electronics</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">5</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Furniture</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">6</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Automotive Accessories</h5>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Appliances</h5>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <span class="badge bg-light text-muted">7</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="d-flex py-1 align-items-center">
                                                <div class="flex-grow-1">
                                                    <h5 class="fs-13 mb-0 listname">Kids</h5>
                                                </div>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>

                            <div class="card-body border-bottom">
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                                <div id="product-price-range" data-slider-color="info"></div>
                                <div class="formCost d-flex gap-2 align-items-center mt-3">
                                    <input class="form-control form-control-sm" type="text" id="minCost"
                                        value="0"> <span class="fw-semibold text-muted">to</span> <input
                                        class="form-control form-control-sm" type="text" id="maxCost"
                                        value="1000">
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingColors">
                                    <button class="accordion-button bg-transparent shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseColors"
                                        aria-expanded="true" aria-controls="flush-collapseColors">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Colors</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>

                                <div id="flush-collapseColors" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingColors">
                                    <div class="accordion-body text-body pt-0">
                                        <ul class="clothe-colors list-unstyled hstack gap-3 mb-0 flex-wrap"
                                            id="color-filter">
                                            <li>
                                                <input type="radio" name="colors" value="success" id="color-1">
                                                <label
                                                    class="avatar-xs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-1"></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="colors" value="info" id="color-2">
                                                <label
                                                    class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-2"></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="colors" value="warning" id="color-3">
                                                <label
                                                    class="avatar-xs btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-3"></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="colors" value="danger" id="color-4">
                                                <label
                                                    class="avatar-xs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-4"></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="colors" value="primary" id="color-5">
                                                <label
                                                    class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-5"></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="colors" value="secondary" id="color-6">
                                                <label
                                                    class="avatar-xs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-6"></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="colors" value="dark" id="color-7">
                                                <label
                                                    class="avatar-xs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-7"></label>
                                            </li>
                                            <li>
                                                <input type="radio" name="colors" value="light" id="color-8">
                                                <label
                                                    class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="color-8"></label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSize">
                                    <button class="accordion-button bg-transparent shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseSize"
                                        aria-expanded="true" aria-controls="flush-collapseSize">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Sizes</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>

                                <div id="flush-collapseSize" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingSize">
                                    <div class="accordion-body text-body pt-0">
                                        <ul class="clothe-size list-unstyled hstack gap-3 mb-0 flex-wrap"
                                            id="size-filter">
                                            <li>
                                                <input type="radio" name="sizes" value="xs" id="sizeXs">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="sizeXs">XS</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sizes" value="s" id="sizeS">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="sizeS">S</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sizes" value="m" id="sizeM">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="sizeM">M</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sizes" value="l" id="sizeL">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="sizeL">L</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sizes" value="xl" id="sizeXl">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="sizeXl">XL</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sizes" value="2xl" id="size2xl">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="size2xl">2XL</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sizes" value="3xl" id="size3xl">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="size3xl">3XL</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="sizes" value="4xl" id="size4xl">
                                                <label
                                                    class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                                    for="size4xl">4XL</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingBrands">
                                    <button class="accordion-button bg-transparent shadow-none" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands"
                                        aria-expanded="true" aria-controls="flush-collapseBrands">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>

                                <div id="flush-collapseBrands" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingBrands">
                                    <div class="accordion-body text-body pt-0">
                                        <div class="search-box search-box-sm">
                                            <input type="text" class="form-control bg-light border-0"
                                                id="searchBrandsList" placeholder="Search Brands...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                        <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Boat"
                                                    id="productBrandRadio5">
                                                <label class="form-check-label" for="productBrandRadio5">Boat</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="OnePlus"
                                                    id="productBrandRadio4">
                                                <label class="form-check-label" for="productBrandRadio4">OnePlus</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Realme"
                                                    id="productBrandRadio3">
                                                <label class="form-check-label" for="productBrandRadio3">Realme</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Sony"
                                                    id="productBrandRadio2">
                                                <label class="form-check-label" for="productBrandRadio2">Sony</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="JBL"
                                                    id="productBrandRadio1">
                                                <label class="form-check-label" for="productBrandRadio1">JBL</label>
                                            </div>

                                            <div>
                                                <button type="button"
                                                    class="btn btn-link text-decoration-none text-uppercase fw-medium p-0">1,235
                                                    More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingDiscount">
                                    <button class="accordion-button bg-transparent shadow-none collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount"
                                        aria-expanded="true" aria-controls="flush-collapseDiscount">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>
                                <div id="flush-collapseDiscount" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingDiscount">
                                    <div class="accordion-body text-body pt-1">
                                        <div class="d-flex flex-column gap-2 filter-check" id="discount-filter">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="50"
                                                    id="productdiscountRadio6">
                                                <label class="form-check-label" for="productdiscountRadio6">50% or
                                                    more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="40"
                                                    id="productdiscountRadio5">
                                                <label class="form-check-label" for="productdiscountRadio5">40% or
                                                    more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="30"
                                                    id="productdiscountRadio4">
                                                <label class="form-check-label" for="productdiscountRadio4">
                                                    30% or more
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="20"
                                                    id="productdiscountRadio3">
                                                <label class="form-check-label" for="productdiscountRadio3">
                                                    20% or more
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="10"
                                                    id="productdiscountRadio2">
                                                <label class="form-check-label" for="productdiscountRadio2">
                                                    10% or more
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="0"
                                                    id="productdiscountRadio1">
                                                <label class="form-check-label" for="productdiscountRadio1">
                                                    Less than 10%
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingRating">
                                    <button class="accordion-button bg-transparent shadow-none collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseRating"
                                        aria-expanded="false" aria-controls="flush-collapseRating">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>

                                <div id="flush-collapseRating" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingRating">
                                    <div class="accordion-body text-body">
                                        <div class="d-flex flex-column gap-2 filter-check" id="rating-filter">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4"
                                                    id="productratingRadio4">
                                                <label class="form-check-label" for="productratingRadio4">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 4 & Above
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3"
                                                    id="productratingRadio3">
                                                <label class="form-check-label" for="productratingRadio3">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 3 & Above
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    id="productratingRadio2">
                                                <label class="form-check-label" for="productratingRadio2">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 2 & Above
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    id="productratingRadio1">
                                                <label class="form-check-label" for="productratingRadio1">
                                                    <span class="text-muted">
                                                        <i class="mdi mdi-star text-warning"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                    </span> 1
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end accordion-item -->
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="flex-grow-1">
                    <div class="d-flex align-items-center justify-content-between gap-2 mb-4">
                        <div class="search-box">
                            <input type="text" class="form-control" id="searchProductList" autocomplete="off"
                                placeholder="Search Products...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-2">
                                <div class="flex-shrink-0">
                                    <label for="sort-elem" class="col-form-label">Sort By:</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <select class="form-select w-md" id="sort-elem">
                                        <option value="">All</option>
                                        <option value="low_to_high">Low to High</option>
                                        <option value="high_to_low">High to Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="product-list" class="table-card gridjs-border-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h3 class="flex-grow-1 mb-0">Deals Of The Day</h3>
                        <div class="flex-shrink-0">
                            <a href="#!" class="link-effect link-success">All Deals <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row gy-4 gy-lg-0">
                <div class="col-xxl-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0">
                            <div class="gallery-product">
                                <img src="{{ URL::asset('build/images/ecommerce/img-5.jpg') }}" alt=""
                                    class="mx-auto d-block object-fit-cover">
                            </div>
                        </div>
                        <div class="content mx-4">
                            <div class="countdown-deals mb-3">
                                <div data-countdown="Feb 30, 2024" class="countdownlist"></div>
                            </div>
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">World's most expensive t-shirt
                                    </h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (4.9)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="text-secondary flex-grow-1 mb-0">$124.99 <span
                                            class="text-muted fs-12"><del>$354.99</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0">
                            <div class="gallery-product">
                                <img src="{{ URL::asset('build/images/ecommerce/img-3.jpg') }}" alt=""
                                    class="mx-auto d-block object-fit-cover">
                            </div>
                        </div>
                        <div class="content mx-4">
                            <div class="countdown-deals mb-3">
                                <div data-countdown="Oct 29, 2023" class="countdownlist"></div>
                            </div>
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">Best Footwear Collections</h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (4.3)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="text-secondary flex-grow-1 mb-0">$80.00 <span
                                            class="text-muted fs-12"><del>$180.00</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0">
                            <div class="gallery-product">
                                <img src="{{ URL::asset('build/images/ecommerce/img-1.jpg') }}" alt=""
                                    class="mx-auto d-block object-fit-cover">
                            </div>
                        </div>
                        <div class="content mx-4">
                            <div class="countdown-deals mb-3">
                                <div data-countdown="Dec 01, 2023" class="countdownlist"></div>
                            </div>
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">Elegant Designer Western Dress
                                    </h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (5.0)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="text-secondary flex-grow-1 mb-0">$30.10 <span
                                            class="text-muted fs-12"><del>$121.99</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
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

    <section class="position-relative py-5 border-bottom">
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
    <!-- nouisliderribute js -->
    <script src="{{ URL::asset('build/libs/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/wnumb/wNumb.min.js') }}"></script>

    <!-- gridjs js -->
    <script src="{{ URL::asset('build/libs/gridjs/gridjs.umd.js') }}"></script>

    <!-- Product-list init js -->
    <script src="{{ URL::asset('build/js/frontend/product-list-table.init.js') }}"></script>

    <!-- coming-soon -->
    <script src="{{ URL::asset('build/js/pages/coming-soon.init.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
