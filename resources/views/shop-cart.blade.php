@extends('layouts.master')
@section('title')
    Shop Cart
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
                        <h4 class="text-white mb-0">Shopping Cart</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
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
    <!--end page-wrapper-->

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger text-center text-capitalize mb-4 fs-14">
                        save up to <b>30%</b> to <b>40%</b> off omg! just look at the <b>great deals</b>!
                    </div>
                </div>
            </div>
<!----------------------------------------les produits du panier------------------------------------------------------->

<!----------------------------------------le panier commence ici------------------------------------------------------->
            <div class="row product-list justify-content-center">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center mb-4">
                        <h5 class="mb-0 flex-grow-1 fw-medium">There are <span class="fw-bold product-count"></span>
                            products in your cart</h5>
                        <div class="flex-shrink-0">
                            <a href="#!" class="text-decoration-underline link-secondary">Clear Cart</a>
                        </div>
                    </div>
            @php $total = 0 @endphp
            @foreach((array) session('cart') as $id => $details)
             @php
                $total += $details['price']*$details['quantity'];
             @endphp
             <div class="card product">
                                <div class="card-body p-4">
                                    <div class="row gy-3">
                                        <div class="col-sm-auto">
                                            <div class="avatar-lg h-100">
                                                <div class="avatar-title bg-danger-subtle rounded py-3">

                                                    <img src="{{ URL::asset('build/images/products/'.$details['image']) }}" alt="" class="avatar-md">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <a href="#!">

                                                <h5 class="fs-16 lh-base mb-1">{{$details['title']}}</h5>
                                            </a>
                                            <ul class="list-inline text-muted fs-13 mb-3">
                                                <li class="list-inline-item">Color : <span class="fw-medium">Red</span></li>
                                                <li class="list-inline-item">Size : <span class="fw-medium">M</span></li>
                                            </ul>

                                            <div class="input-step ms-2 quantity">
                                                <button type="button" class="btn decrement-btn" >–</button>
                                                    <input type="number" class="qty-input" value="{{$details['quantity']}}" name="" max="100" value="1">
                                                <button type="button" class="btn increment-btn" >+</button>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="text-lg-end">
                                                <p class="text-muted mb-1 fs-12">Item Price:</p>

                                                <h5 class="fs-16">$<span class="product-price">{{$details['price']}}</span></h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-sm">
                                            <div class="d-flex flex-wrap my-n1">
                                                <div>

                                                    <a href="" class="d-block text-body p-1 px-2" data-bs-toggle="modal"data-bs-target="#removeItemModal"><i
                                                            class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Remove</a>
                                                </div>
                                                <div>
                                                    <a href="#!" class="d-block text-body p-1 px-2"><i class="ri-star-fill text-muted align-bottom me-1"></i> Add Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex align-items-center gap-2 text-muted">
                                                <div>Total :</div>

                                                <h5 class="fs-14 mb-0">$<span class="product-line-price">{{$details['price']*$details['quantity']}}</span></h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card footer -->
                            </div>
                <!--end card-->
            @endforeach

                </div>
                <!--end col-->
                <div class="col-lg-4">
                    <div class="sticky-side-div">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3 fs-15">Have a <span class="fw-semibold">promo</span> code ?</h6>
                                </div>
                                <div class="hstack gap-3 px-3 mx-n3">
                                    <input class="form-control me-auto" type="text" placeholder="Enter coupon code"
                                           value="Toner15" aria-label="Add Promo Code here...">
                                    <button type="button" class="btn btn-primary w-xs">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="card overflow-hidden">
                            <div class="card-header border-bottom-dashed">
                                <h5 class="card-title mb-0 fs-15">Order Summary</h5>
                            </div>
                            <div class="card-body pt-4">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless mb-0 fs-15">
                                        <tbody>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end cart-subtotal"></td>
                                        </tr>
                                        <tr>
                                            <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                                            <td class="text-end cart-discount"></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge :</td>
                                            <td class="text-end cart-shipping"></td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax (12.5%) : </td>
                                            <td class="text-end cart-tax"></td>
                                        </tr>
                                        <tr class="table-active">
                                            <th>Total (USD) :</th>
                                            <td class="text-end">
                                                <span class="fw-semibold cart-total">{{$total}}</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-hover btn-danger">Continue Shopping</button>
                            <button type="button" class="btn btn-hover btn-success">Check Out <i
                                    class="ri-logout-box-r-line align-bottom ms-1"></i></button>
                        </div>
                    </div>
                    <!-- end stickey -->
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                        <h4 class="flex-grow-1 mb-0">New Branded Products</h4>
                        <div class="flex-shrink-0">
                            <a href="#!" class="link-effect link-primary">All Products <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-12.png') }}" alt=""
                                 style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action"
                                        data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes10" id="product-color-102"><label
                                        class="avatar-xxs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-102"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-103"><label
                                        class="avatar-xxs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-103"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-104"><label
                                        class="avatar-xxs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-104"></label></li>
                                <li><input type="radio" name="sizes10" id="product-color-105"><label
                                        class="avatar-xxs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-105"></label></li>
                            </ul>
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Carven Lounge Chair Red</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">4.1 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$209.99</h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-7.png') }}" alt=""
                                 style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action "
                                        data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div>
                                <div class="avatar-xxs mb-4">
                                    <div class="avatar-title bg-light text-muted rounded cursor-pointer"><i
                                            class="ri-error-warning-line"></i></div>
                                </div>
                                <a href="#!">
                                    <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Innovative education book
                                    </h6>
                                </a>
                                <div class="mt-2">
                                    <span class="float-end">4.7 <i
                                            class="ri-star-half-fill text-warning align-bottom"></i></span>
                                    <h5 class="mb-0">$96.26</h5>
                                </div>
                                <div class="mt-3">
                                    <a href="#!" class="btn btn-primary w-100 add-btn"><i
                                            class="mdi mdi-cart me-1"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-3.png') }}" alt=""
                                 style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action "
                                        data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                            <div class="avatar-xs label">
                                <div class="avatar-title bg-danger rounded-circle fs-11">20%</div>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes11" id="product-color-112"><label
                                        class="avatar-xxs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-112"></label></li>
                                <li><input type="radio" name="sizes11" id="product-color-113"><label
                                        class="avatar-xxs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-113"></label></li>
                            </ul>
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Ninja Pro Max Smartwatch</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">3.5 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$247.27 <span class="text-muted fs-12"><del>$309.09</del></span></h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-3 col-lg-4 col-md-6">
                    <div
                        class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                        <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                            <img src="{{ URL::asset('build/images/products/img-2.png') }}" alt=""
                                 style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                            <div class="action vstack gap-2">
                                <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action "
                                        data-bs-toggle="button"><span class="icon-on"><i
                                            class="ri-heart-line"></i></span><span class="icon-off"><i
                                            class="ri-heart-fill"></i></span></button>
                            </div>
                        </div>
                        <div class="pt-4">
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-3 flex-wrap">
                                <li><input type="radio" name="sizes12" id="product-color-122"><label
                                        class="avatar-xxs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle"
                                        for="product-color-122"></label></li>
                            </ul>
                            <a href="#!">
                                <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">Opinion Striped Round Neck
                                    Green T-shirt</h6>
                            </a>
                            <div class="mt-2">
                                <span class="float-end">4.1 <i
                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                <h5 class="mb-0">$126.99</h5>
                            </div>
                            <div class="mt-3">
                                <a href="#!" class="btn btn-primary btn-hover w-100 add-btn"><i
                                        class="mdi mdi-cart me-1"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end Container-->
    </section>

    <section class="section bg-light bg-opacity-25"
             style="background-image: url('build/images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div>
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">25% Up to</span>
                            off all Products</p>
                        <h1 class="lh-base text-capitalize mb-3">Stay home & get your daily needs from our shop</h1>
                        <p class="fs-15 mb-4 pb-2">Start You'r Daily Shopping with <a href="#!"
                                                                                      class="link-primary text-decoration-underline fw-medium">Toner</a></p>
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
    <script>
        $(document).ready(function () {

            $('.increment-btn').click(function (e) {
                e.preventDefault();
                var incre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(incre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value<100){
                    value++;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }

            });

            $('.decrement-btn').click(function (e) {
                e.preventDefault();
                var decre_value = $(this).parents('.quantity').find('.qty-input').val();
                var value = parseInt(decre_value, 10);
                value = isNaN(value) ? 0 : value;
                if(value>1){
                    value--;
                    $(this).parents('.quantity').find('.qty-input').val(value);
                }
            });

        });
    </script>
@endsection
@section('scripts')
    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
