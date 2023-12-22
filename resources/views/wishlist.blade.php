@extends('layouts.master')
@section('title')
    Wishlist
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="page-wrapper bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center d-flex align-items-center justify-content-between">
                        <h4 class="text-white mb-0">Wishlist</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- end page title -->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table fs-15 table-nowrap align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Produit</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Statut Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($wishlistItems as $wishlistItem)
                                <tr>
                                    <td>
                                        <div class="d-flex gap-3">
                                            <div class="avatar-sm flex-shrink-0">
                                                <div class="avatar-title bg-dark-subtle rounded">
                                                    @if ($wishlistItem->product->product_images->isNotEmpty())
                                                        <img src="{{ URL::asset('build/images/products/' . $wishlistItem->product->product_images->first()->image) }}" alt=""
                                                             class="avatar-xs">
                                                    @else
                                                        <img src="{{ URL::asset('build/images/products/img-1.png') }}" alt=""
                                                             class="avatar-xs">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="{{ route('view_product', ['id' => $wishlistItem->product->id]) }}">
                                                    <h6 class="fs-16">{{ $wishlistItem->product->title }}</h6>
                                                </a>
                                                <p class="mb-0 text-muted fs-13">{{ $wishlistItem->product->description }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>${{ $wishlistItem->product->unit_price }}</td>
                                    <td><span class="badge bg-success-subtle text-success">{{ $wishlistItem->product->qty > 0 ? 'In Stock' : 'Out of Stock' }}</span></td>
                                    <td>
                                        <ul class="list-unstyled d-flex gap-3 mb-0">
                                            <li>
                                                <a href="shop-cart" class="btn btn-soft-info btn-icon btn-sm AddToCart1" data-product-id="{{$wishlistItem->product->id}}" ><i
                                                        class="ri-shopping-cart-2-line fs-13"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ route('wishlist.remove', ['id' => $wishlistItem->id]) }}" class="btn btn-soft-danger btn-icon btn-sm">
                                                    <i class="ri-close-line fs-13"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="hstack gap-2 justify-content-end mt-2">
                        <a href="product-list" class="btn btn-hover btn-secondary">Continue Shopping<i
                                class="ri-arrow-right-line align-bottom"></i></a>
                        <a href="checkout" class="btn btn-hover btn-primary">Check Out <i
                                class="ri-arrow-right-line align-bottom"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h3 class="flex-grow-1 mb-0">Today's Hot Deal</h3>
                        <div class="flex-shrink-0">
                            <a href="#!" class="link-effect link-success fw-medium">View All Products <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0 border-0">
                            <div class="gallery-product bg-danger-subtle card-body">
                                <img src="{{ URL::asset('build/images/products/img-6.png') }}" alt="" class="avatar-xl">
                            </div>
                        </div>
                        <div class="content mx-4 pt-5">
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">Striped High Neck Casual Men
                                        Orange Sweater</h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (4.7)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="flex-grow-1 mb-0">$62.40 <span
                                            class="text-muted fs-12"><del>$120.00</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0 border-0">
                            <div class="gallery-product bg-success-subtle card-body">
                                <img src="{{ URL::asset('build/images/products/img-4.png') }}" alt="" class="avatar-xl">
                            </div>
                        </div>
                        <div class="content mx-4 pt-5">
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">Girls Mint Green & Off-White
                                        Solid Open Toe Flats</h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-half-fill text-warning align-bottom"></i> (4.5)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="flex-grow-1 mb-0">$80.00 <span
                                            class="text-muted fs-12"><del>$180.00</del></span></h5>
                                    <a href="#!" class="btn btn-primary btn-sm"><i
                                            class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="ecommerce-deals-widgets">
                        <div class="card overflow-hidden mb-0 border-0">
                            <div class="gallery-product bg-dark-subtle card-body">
                                <img src="{{ URL::asset('build/images/products/img-19.png') }}" alt="" class="avatar-xl">
                            </div>
                        </div>
                        <div class="content mx-4 pt-5">
                            <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                                <a href="#!">
                                    <h6 class="text-capitalize fs-16 lh-base text-truncate">Ethex Women Ribbed Sweater</h6>
                                </a>
                                <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> <i
                                        class="ri-star-fill text-warning align-bottom"></i> (5.0)</p>
                                <div class="mt-3 d-flex align-items-center">
                                    <h5 class="flex-grow-1 mb-0">$24.07 <span
                                            class="text-muted fs-12"><del>$96.26</del></span></h5>
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

    <section class="section bg-light bg-opacity-25"
        style="background-image: url('build/images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"> <span class="fw-semibold text-danger">Summer</span>
                            Collection</p>
                        <h1 class="lh-base text-capitalize mb-3">Get 35% Discount For Couple Special</h1>
                        <p class="fs-15 mb-4 pb-2">Start You'r Daily Shopping with <a href="#!"
                                class="link-secondary text-decoration-underline fw-medium">Toner</a></p>
                        <form action="#!">
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" class="form-control rounded-pill" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary btn-hover rounded-pill">Subscript
                                    Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="mt-5 mt-lg-0">
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
            <div class="row gy-3 gy-lg-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/fast-delivery.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-16">Fast & Secure Delivery</h5>
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
                            <h5 class="fs-16">2 Days Return Policy</h5>
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
                            <h5 class="fs-16">Money Back Guarantee</h5>
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
                            <h5 class="fs-16">24 X 7 Service</h5>
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
    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
