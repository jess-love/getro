@extends('layouts.master')

@section('title')
    List Right Sidebar
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection

@section('css')
    <!-- extra css -->
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/nouislider/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
    <section class="ecommerce-about"
             style="background-image: url('build/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-0">PRODUITS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="ecommerce-product gap-4">
                <div class="flex-grow-1">
                    <div class="d-flex align-items-center justify-content-between gap-2 mb-4">

                        {{--Start Research--}}
                        <div class="search-box">
                            <form action="{{ route('search', ['sub_category_id' => $sub_category_id]) }}" method="GET" class="input-group">
                            <input type="text" name="query" class="form-control" id="searchProductList" autocomplete="off" placeholder="Rechercher Produits...">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ri-search-line search-icon text-white"></i>
                                </button>
                            </form>
                        </div>

                        {{--End Research--}}

                        {{--Start Sort By--}}
                        <div class="flex-shrink-0 d-flex gap-2">
                            <div class="d-flex gap-2">
                                <div class="flex-shrink-0">
                                    <label for="sort-elem" class="col-form-label">Trier par Prix:</label>
                                </div>
                                <div class="flex-shrink-0">
                                    <form action="{{ route('products_nav', ['sub_category_id' => $sub_category_id]) }}" method="GET">
                                        <select class="form-select w-md" id="sort-elem" name="sortType" onchange="this.form.submit()">
                                            <option value="">All</option>
                                            <option value="low_to_high" {{ request('sortType') == 'low_to_high' ? 'selected' : '' }}>Bas vers Haut</option>
                                            <option value="high_to_low" {{ request('sortType') == 'high_to_low' ? 'selected' : '' }}>Haut vers Bas</option>
                                        </select>
                                    </form>

                                </div>
                            </div>
                        </div>
                        {{--End Sort By--}}

                    </div>
                    {{--Start Product List--}}
                    <div class="row">
                        @if ($products->isEmpty())
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center py-5">
                                        <div class="avatar-lg mx-auto mb-4">
                                            <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                                <i class="bi bi-search"></i>
                                            </div>
                                        </div>
                                        <h5>No matching records found</h5>
                                    </div>
                                </div>
                            </div>
                        @else
                            @foreach($products as $produit)
                                <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot arrival"
                                             data-category="hot arrival">
                                            <div class="card overflow-hidden">
                                                <div class="bg-warning-subtle rounded-top py-4">
                                                    <div class="gallery-product">
                                                        <a href="{{ route('products_nav', ['sub_category_id' => $produit->sub_category_id]) }}">
                                                            <img src="{{ asset('build/images/products/'.$produit->main_pic) }}" alt=""
                                                                 style="max-height: 215px; max-width: 100%;" class="mx-auto d-block">
                                                        </a>
                                                    </div>
                                                    <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">{{$produit['tag']}}
                                                    </p>
                                                    <div class="gallery-product-actions">
                                                        <div class="mb-2">
                                                            <button type="button" class="btn btn-danger btn-sm custom-toggle"
                                                                    data-bs-toggle="button">
                                                    <span class="icon-on"><i
                                                            class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                                                <span class="icon-off"><i
                                                                        class="mdi mdi-heart align-bottom fs-15"></i></span>
                                                            </button>
                                                        </div>


                                                        <div>
                                                            <a href="{{route('products_nav',['sub_category_id' => $produit['sub_category_id']]) }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-eye align-bottom fs-15"></i></a>
                                                        </div>

                                                    </div>
                                                    <div class="product-btn px-3">
                                                        <a href="#" class="btn btn-primary btn-sm w-75 add-btn"><i
                                                                class="mdi mdi-cart me-1"></i> Add to cart
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="card-body">
                                                    <div>
                                                        <a href="product-details">
                                                            <h6 class="fs-15 lh-base text-truncate mb-0"> </b> {{$produit['title']}} </b> <br> <span style="font-weight:normal;"> {{$produit['description']}} </span> </h6>
                                                        </a>
                                                        <div class="mt-3">
                                                <span class="float-end">4.9 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="mb-0">{{number_format($produit['unit_price'],2) }}$ <span>   </span><span
                                                                    class="text-muted fs-12"><del>{{number_format($produit['discount'],2)}}$</del></span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            @endforeach
                        @endif
                    </div>
                    {{--End Product List--}}

                    {{--Start Pagination--}}
{{--                    <div class="toto" >--}}
{{--                       <form><div class="pagination page-item" >--}}
{{--                               {{ $products->appends(request()->except('page'))->links() }}--}}
{{--                        </div></form>--}}
{{--                    </div>--}}
                    {{--End Pagination--}}
                </div>

                <div class="sidebar small-sidebar flex-shrink-0">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <h5 class="fs-16 mb-0">Filtrer par</h5>
                                </div>
{{--                                <div class="flex-shrink-0">--}}
{{--                                    <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="accordion accordion-flush filter-accordion">
                            <div class="card-body border-bottom">
                                <div>
                                    <p class="text-muted text-uppercase" style="font-size: 18px; font-weight: bold; margin-bottom: 3px;">Sous Categories</p>
                                    @foreach($sub_cat as $subCategory)
                                        <ul class="list-unstyled mb-0 filter-list">
                                            <li>
                                                <a href="{{ route('products_nav', ['sub_category_id' => $subCategory->id]) }}" class="d-flex py-1 align-items-center custom-link">
                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-14 mb-0 listname">{{ $subCategory->title }}</h5>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    @endforeach
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
                                <h2 class="accordion-header" id="flush-headingColors">
                                    <button class="accordion-button bg-transparent shadow-none" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseColors"
                                            aria-expanded="true" aria-controls="flush-collapseColors">
                                        <span class="text-muted text-uppercase fs-12 fw-medium">Sizes</span> <span
                                            class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                    </button>
                                </h2>

                                <div id="flush-collapseColors" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-headingColors">
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
                                                <label class="form-check-label" for="productdiscountRadio6">50% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="40"
                                                       id="productdiscountRadio5">
                                                <label class="form-check-label" for="productdiscountRadio5">40% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="30"
                                                       id="productdiscountRadio4">
                                                <label class="form-check-label" for="productdiscountRadio4"> 30% or more   </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="20"
                                                       id="productdiscountRadio3">
                                                <label class="form-check-label" for="productdiscountRadio3">  20% or more</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="10"
                                                       id="productdiscountRadio2">
                                                <label class="form-check-label" for="productdiscountRadio2">    10% or more  </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="0"
                                                       id="productdiscountRadio1">
                                                <label class="form-check-label" for="productdiscountRadio1">    Less than 10% </label>
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
                    <div class="toto" >
                        <form><div class="pagination page-item" >
                                {{ $products->appends(request()->except('page'))->links() }}
                            </div></form>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light bg-opacity-25"
             style="background-image: url('build/images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">Jusqu'a 25%</span>
                            de reduction sur tous nos produits</p>
                        <h1 class="lh-base text-capitalize mb-3">Restez à la maison et obtenez vos besoins quotidiens dans notre boutique</h1>
                        <p class="fs-15 mb-4 pb-2">Commencez vos achats quotidiens avec <a href="#!"
                                                                                      class="link-info fw-medium">Bel Mache</a></p>
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form id="subscribe-form" action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" name="email" class="form-control rounded-pill" placeholder="Entrer votre email" required>
                                <button type="submit" class="btn btn-primary btn-hover rounded-pill">Abonnez-vous Maintenant</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="mt-4 mt-lg-0">
                        <img src="{{ URL::asset('build/images/ecommerce/subscribe.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
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
                            <h5 class="fs-15">Livraison rapide &amp; sécurisée.</h5>
                            <p class="text-muted mb-0">Parlez de votre service.</p>
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
                            <h5 class="fs-15">Politique de retour sous 2 jours</h5>
                            <p class="text-muted mb-0">Aucune question à poser.</p>
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
                            <h5 class="fs-15">Garantie de remboursement</h5>
                            <p class="text-muted mb-0">Dans les 5 jours ouvrables</p>
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
                            <h5 class="fs-15">24 X 7 de Service</h5>
                            <p class="text-muted mb-0">Service en ligne pour le client</p>
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

    <!-- Product-list init js -->
    <script src="{{ URL::asset('build/js/frontend/product-list.init.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
