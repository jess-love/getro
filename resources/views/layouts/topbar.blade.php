<?php $displayedCategories = []; ?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">
<style>
    .highlight-link:hover {
        background-color: yellow; /* Changez cette couleur selon vos préférences */
    }
</style>
</head>
<nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
    <div class="container">
        <a class="navbar-brand d-none d-lg-block" href="{{route('index')}}">
            <div class="logo-dark">
                <img src="{{ URL::asset('build/images/logo1.png') }}" alt="" height="50">
            </div>
            <div class="logo-light">
                <img src="{{ URL::asset('build/images/logo1.png') }}" alt="" height="50">
            </div>
        </a>
        <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-20"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                <li class="nav-item d-block d-lg-none">
                    <a class="d-block p-3 h-auto text-center" href="index.html">
                        <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="25" class="card-logo-dark mx-auto">
                        <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="25" class="card-logo-light mx-auto">
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-mega-full dropdown-hover">
                    <a class="nav-link dropdown-toggle" data-key="t-catalog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CATEGORIE
                    </a>
                    <div class="dropdown-menu p-0">
                        <div class="row g-0 g-lg-4">
                            <div class="col-lg-2 d-none d-lg-block">
                                <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('build/images/ecommerce/img-1.jpg');background-size: cover;">
                                    <div class="bg-overlay bg-light bg-opacity-25"></div>
                                    <div class="card-body d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <a href="product-grid-sidebar-banner" class="btn btn-secondary btn-hover"><i class="ph-storefront align-middle me-1"></i> <span data-key="t-shop-now">{{ __('t-shop-now') }}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             @if ($cat_and_sub)
                                @foreach($cat_and_sub as $categoryId => $subCategories)
                                    <div class="col-lg-2">
                                        <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                            @foreach ($subCategories as $subCategory)
                                                @if ($subCategory->CategoryFunc && !in_array($subCategory->CategoryFunc->title, $displayedCategories))
                                                    <li  class="nav-item dropdown dropdown-hover">
                                                        <p class="mb-2 text-uppercase fs-16 fw-bold text-muted menu-title" >{{ $subCategory->CategoryFunc->title }}</p>
                                                    </li>
                                                        <?php $displayedCategories[] = $subCategory->CategoryFunc->title; ?>
                                                @endif
                                                <li  class="nav-item  dropdown-hover">
                                                    <a href="{{ route('products_nav', ['sub_category_id' => $subCategory->id]) }}">
                                                        <p  style="cursor: pointer" class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-men">{{ $subCategory->title }}</p>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            @else
                                <p>No variable available.</p>
                            @endif


                            <div class="col-lg-2 d-none d-lg-block">
                            </div>
                        </div>
                    </div>
                </li>
                {{--                ******************************Shop start*****************************************************--}}
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-shop">
                        SHOP
                    </a>
                    <div class="dropdown-menu dropdown-mega-menu-xl dropdown-menu-center p-0">
                        <div class="row g-0 g-lg-4">
                            <div class="col-lg-5 d-none d-lg-block">
                                <div class="card rounded-start rounded-0 border-0 h-100 mb-0 overflow-hidden" style="background-image: url('build/images/ecommerce/img-2.jpg'); background-size: cover;">
                                    <div class="bg-overlay bg-primary" style="opacity: 0.90;"></div>
                                    <div class="card-body d-flex align-items-center justify-content-center position-relative">
                                        <div class="text-center">
                                            <h6 class="card-title text-white">Welcome to Toner</h6>
                                            <p class="text-white-75">See all the products at once.</p>
                                            <a href="#!" class="btn btn-light btn-sm btn-hover">Shop Now <i class="ph-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row g-0 g-lg-4">
                                    <div class="col-lg-6">
                                        <div class="py-3">
                                            <ul class="dropdown-menu-list list-unstyled mb-0">
                                                <li>
                                                    <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-checkout-pages">{{ __('t-checkout-pages') }}</p>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('address')}}" class="nav-link" data-key="t-address"> {{ __('t-address') }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="track-order" class="nav-link" data-key="t-track-order">{{ __('t-track-order') }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="payment" class="nav-link" data-key="t-payment">{{ __('t-payment') }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="review" class="nav-link" data-key="t-review">{{ __('t-review') }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="confirmation" class="nav-link" data-key="t-confirmation">{{ __('t-confirmation') }}</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="order-history" class="nav-link" data-key="t-my-orders-order-history">{{ __('t-my-orders-order-history') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="dropdown-menu-list list-unstyled mb-0 py-3">
                                            <li>
                                                <p class="mb-2 text-uppercase fs-11 fw-medium text-muted menu-title" data-key="t-support">{{ __('t-support') }}</p>
                                            </li>
                                            <li class="nav-item">
                                                <a href="shop-cart" class="nav-link" data-key="t-shopping-cart">{{ __('t-shopping-cart') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="checkout" class="nav-link" data-key="t-checkout">{{ __('t-checkout') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="wishlist" class="nav-link" data-key="t-wishlist">{{ __('t-wishlist') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                {{--                ******************************Shop endt*****************************************************--}}

                {{--                ******************************pages start*****************************************************--}}
                <li class="nav-item dropdown dropdown-hover">
                    <a class="nav-link dropdown-toggle" data-key="t-pages" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PAGES
                    </a>
                    <ul class="dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                        <li class="nav-item dropdown dropdown-hover">
                            <a class="nav-link" href="product-grid-sidebar-banner"  data-key="t-sidebar-with-banner">Products</a>
                        </li>

                        <li class="nav-item dropdown dropdown-hover">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-users">{{ __('t-users') }}</a>
                            <ul class="dropdown-menu submenu">
                                <li><a class="nav-link" href="auth-signin-basic" data-key="t-sign-in">{{ __('t-sign-in') }}</a></li>
                                <li><a class="nav-link" href="auth-signup-basic" data-key="t-sign-up">{{ __('t-sign-up') }}</a></li>
                                <li><a class="nav-link" href="auth-pass-reset-basic" data-key="t-passowrd-reset">{{ __('t-passowrd-reset') }}</a></li>
                                <li><a class="nav-link" href="auth-pass-change-basic" data-key="t-create-password">{{ __('t-create-password') }}</a></li>
                                <li><a class="nav-link" href="auth-success-msg-basic" data-key="t-success-message">{{ __('t-success-message') }}</a></li>
                                <li><a class="nav-link" href="auth-twostep-basic" data-key="t-two-step-verify">{{ __('t-two-step-verify') }}</a></li>
                                <li><a class="nav-link" href="auth-logout-basic" data-key="t-logout">{{ __('t-logout') }}</a></li>
                                <li><a class="nav-link" href="auth-404" data-key="t-error-404">{{ __('t-error-404') }}</a></li>
                                <li><a class="nav-link" href="auth-500" data-key="t-error-500">{{ __('t-error-500') }}</a></li>
                                <li><a class="nav-link" href="coming-soon" data-key="t-coming-soon">{{ __('t-coming-soon') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="products-category" class="nav-link" data-key="t-categories">{{ __('t-categories') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="about-us" class="nav-link" data-key="t-about">{{ __('t-about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="purchase-guide" class="nav-link" data-key="t-purchase-guide">{{ __('t-purchase-guide') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="terms-conditions" class="nav-link" data-key="t-terms-of-service">{{ __('t-terms-of-service') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="privacy-policy" class="nav-link" data-key="t-privacy-policy">{{ __('t-privacy-policy') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="store-locator" class="nav-link" data-key="t-store-locator">{{ __('t-store-locator') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="ecommerce-faq" class="nav-link" data-key="t-faq">{{ __('t-faq') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="invoice" class="nav-link" data-key="t-invoice">{{ __('t-invoice') }}</a>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-email-template">{{ __('t-email-template') }}</a>
                            <ul class="dropdown-menu submenu">
                                <li><a class="nav-link" href="email-black-friday" data-key="t-black-friday">{{ __('t-black-friday') }}</a></li>
                                <li><a class="nav-link" href="email-flash-sale" data-key="t-flash-sale">{{ __('t-flash-sale') }}</a></li>
                                <li><a class="nav-link" href="email-order-success" data-key="t-order-success">{{ __('t-order-success') }}</a></li>
                                <li><a class="nav-link" href="email-order-success-2" data-key="t-order-success-2">{{ __('t-order-success-2') }}</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-hover">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-multi-level">{{ __('t-multi-level') }}</a>
                            <ul class="dropdown-menu submenu">
                                <li><a class="nav-link" href="#" data-key="t-level-1.1">{{ __('t-level-1.1') }}</a></li>
                                <li><a class="nav-link" href="#" data-key="t-level-1.2">{{ __('t-level-1.2') }}</a></li>
                                <li class="dropdown dropdown-hover">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-level-1.3">{{ __('t-level-1.3') }}</a>
                                    <ul class="dropdown-menu submenu">
                                        <li><a class="nav-link" href="#" data-key="t-level-2.1">{{ __('t-level-2.1') }}</a></li>
                                        <li><a class="nav-link" href="#" data-key="t-level-2.2">{{ __('t-level-2.2') }}</a></li>
                                        <li class="dropdown dropdown-hover">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-key="t-level-2.3">{{ __('t-level-2.3') }}</a>
                                            <ul class="dropdown-menu submenu">
                                                <li><a class="nav-link" href="#" data-key="t-level-3.1">{{ __('t-level-3.1') }}</a></li>
                                                <li><a class="nav-link" href="#" data-key="t-level-3.2">{{ __('t-level-3.2') }}</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact-us" data-key="t-contact">CONTACT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about-us" data-key="t-about-us">A PROPOS</a>
                </li>
            </ul>
        </div>
        <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent.show"></div>

        <div class="d-flex align-items-center">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="bx bx-search fs-22"></i>
            </button>
            <div class="topbar-head-dropdown ms-1 header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="offcanvas" data-bs-target="#ecommerceCart" aria-controls="ecommerceCart">
                    <i class="ph-shopping-cart fs-18"></i>
                    @if(collect($productsWithImages)->isNotEmpty())
                        @php
                            $totalProducts = 0;
                        @endphp

                        @foreach($productsWithImages as $item)
                            @php
                                if ($item->cart) {
                                    $totalProducts += $item->cart->quantity;
                                }
                            @endphp
                        @endforeach
                        <span id="cartItemCount" class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-danger">{{ $totalProducts }}</span>
                    @else
                        <!-- Si le panier est vide, n'affichez pas le code -->
                    @endif
                </button>
            </div>


            <div class="dropdown topbar-head-dropdown ms-2 header-item dropdown-hover-end">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted position-relative" onclick="redirectToWishlist()">
                    <i class="bi bi-heart align-middle fs-20"></i>
                    <span id="wishlistItemCount" class="badge bg-danger position-absolute top-0 end-0">{{ count($wishlistItems) }}</span>
                </button>
            </div>

            <script>
                function redirectToWishlist() {
                    window.location.href = '{{ route("wishlist.show") }}';
                }
            </script>


        </div>
            <!---------------------------------------------------------avatar---------------------------------------------------------------------------------------------------------->
            <div class="dropdown header-item dropdown-hover-end">
                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="@if(@Auth::user()->avatar) {{ URL::asset('images/users')."/".@Auth::user()->avatar }} @else {{ URL::asset('build/images/users/avatar-1.jpg') }} @endif" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome {{ @Auth::user()->last_name }}!</h6>
                    <a class="dropdown-item" href="{{route('myaccount')}}">My Account</a>
                    <a class="dropdown-item" href="order-history"><i class="bi bi-cart4 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Order History</span></a>
                    <a class="dropdown-item" href="track-order"><i class="bi bi-truck text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Track Orders</span></a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-speedometer2 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Dashboard</span></a>
                    <a class="dropdown-item" href="ecommerce-faq"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
{{--                    <a class="dropdown-item" href="account"><i class="bi bi-coin text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>--}}
                    {{--                    <a class="dropdown-item" href="account"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>--}}
                    <a class="dropdown-item" href="{{ url('logout') }}"><i class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">{{ __('t-logout') }}</span></a>
                </div>
            </div>
            <!------------------------------------------------------------end avatar---------------------------------------------------------------------------------------------------------------->
        </div>
    </div>
</nav>

<!------------------------------------------------------------------------cart ---------------------------------------------------------------------------------------------------->
<div class="offcanvas offcanvas-end product-list  product_data" tabindex="-1" id="ecommerceCart" aria-labelledby="ecommerceCartLabel">
    <div class="offcanvas-header border-bottom ">
        @if(collect($productsWithImages)->isNotEmpty())
            @php
                $totalProducts = 0;
            @endphp

            @foreach($productsWithImages as $item)
                @php
                    if ($item->cart) {
                        $totalProducts += $item->cart->quantity;
                    }
                @endphp
            @endforeach
            <h5 class="offcanvas-title" id="ecommerceCartLabel">Mon Panier <span class="badge bg-danger align-middle ms-1 cartitem-badge">{{ $totalProducts }}</span></h5>
        @else
            <!-- Si le panier est vide, n'affichez pas le code -->
        @endif
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0 product_data">
        <div data-simplebar  class="h-100 ">
            <ul class="list-group list-group-flush cartlist ">
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @php
                    $totalAmount = 0;
                @endphp

                @if(!empty($productsWithImages) && count($productsWithImages) > 0)
                    @foreach($productsWithImages as $item)
                        @php
                            $itemtotal = 0;
                            if ($item && $item->cart) {
                                $itemtotal += $item->unit_price * $item->cart->quantity;
                            }
                            $totalAmount += $itemtotal;
                        @endphp
                        <div class="card product product_data">
                            <div class="card-body p-4 ">
                                <div class="row gy-3">
                                    <div class="col-sm-auto">
                                        <div class="avatar-lg h-100">
                                            <div class="avatar-title bg-danger-subtle rounded py-3">
                                                <a href="">
                                                    @if(!empty($item->product_images->first()->image))
                                                        <img src="{{ asset('build/images/products/'.$item->product_images->first()->image) }}" alt=""
                                                             style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                                    @else
                                                        <img src="{{ asset('build/images/products/default.png')}}" alt=""
                                                             style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                                    @endif
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="fs-16 lh-base mb-1 me-2">{{ $item->title ?? 'N/A' }}</h5>

                                            <div class="d-flex align-items-center">
                                                <button type="button" class="btn btn-danger btn-sm custom-toggle me-1 p-1" data-bs-toggle="button" onclick="toggleWishlist({{ $item->id }})">
                                                    <span class="icon-on"> <i class="mdi mdi-heart-outline align-bottom fs-12"></i> </span>
                                                    <span class="icon-off"> <i class="mdi mdi-heart align-bottom fs-12"></i> </span>
                                                </button>

                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn cart_remove" data-bs-toggle="modal" onclick="deleteItem('{{$item->id}}')">
                                                    <a href="" class="d-block text-body p-1 px-2 btn-delete-item" data-bs-toggle="modal">
                                                        <i class="ri-close-fill fs-16"></i>
                                                    </a>
                                                </button>
                                            </div>
                                        </div>



                                        <div class="list-inline-item">HTG
                                            <span class="fw-medium"> {{ $item->unit_price ?? 'N/A' }}</span>
                                        </div>
                                        @if($item->qty > 0)
                                         <span class="text-success fw-medium">In Stock</span>
                                           @else
                                         <span class="text-success fw-medium">Out of stock</span>
                                         @endif

                                        <ul class="list-inline text-muted fs-13 mb-3">
                                            <li class="list-inline-item">Color: <span class="fw-medium">{{ $item->product_images->isNotEmpty() ? $item->product_images->first()->color : 'N/A' }}</span></li>
                                            <li class="list-inline-item">Size: <span class="fw-medium">{{ $item->product_images->isNotEmpty() ? $item->product_images->first()->size : 'N/A' }}</span></li>
                                        </ul>

                                        <div class="input-step ms-2">
                                            <input type="hidden" value="{{ $item->id }}" class="prod_id">
                                            <button class="decrement-btn changeQty" >–</button>
                                            <input name="quantity" type="number" class="qty-input" value="{{ $item->cart->quantity ?? 'N/A' }}" min="0" max="100">
                                            <button class="increment-btn changeQty">+</button>
                                        </div>
                                    </div>

                                    <script>
                                        function toggleWishlist(productId) {
                                            $.ajax({
                                                type: 'POST',
                                                url: '/wishlist/toggle',
                                                data: { product_id: productId },
                                                success: function(response) {
                                                    // alert(response.message);
                                                    window.location.reload();
                                                },

                                                error: function(error) {
                                                    console.error(error);
                                                }
                                            });
                                        }
                                    </script>

                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="text-lg-end">
                                            <h5 class="fs-16"> <span class="product-price">HTG {{$item->unit_price *  $item->cart->quantity}}</span> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                @else

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <h4>
                                            Votre panier est vide!
                                        </h4>

                                    </div>

                                </div>
                            </div>
                @endif
            </ul>

            <div class="table-responsive mx-2 border-top">
                <table class="table table-borderless mb-0 fs-14 fw-semibold">
                    <tbody>
                    <tr>
                        <td>Sub Total :</td>
                       <td class="text-end cart-subtotal">
                           @isset($totalAmount)
                               HTG {{ $totalAmount }}
                           @else
                               0
                           @endisset
                       </td>
                    </tr>
                    @php
                        // Stocker la valeur dans la session
                        session(['totalAmount' => $totalAmount]);
                    @endphp
                    <?php
                    if (isset($totalAmount)) {
                        $taxPercentage = 2.5; // Pourcentage de taxe
                        $taxAmount = ($totalAmount * $taxPercentage) / 100;
                        $shippingCharge = 100;

                        $totalAmountWithTaxAndShipping = $totalAmount + $taxAmount + $shippingCharge;
                    } else {
                        $totalAmountWithTaxAndShipping = 0;
                    }
                    ?>
                    <tr>
                        <td>Discount <span class="text-muted">(Bel Mache)</span>:</td>
                        <td class="text-end cart-discount">HTG 0</td>
                    </tr>
                    <tr>
                        <td>Shipping Charge :</td>
                        <td class="text-end cart-shipping">
                            @if(count($productsWithImages) > 0)
                                HTG {{ $shippingCharge }}
                            @else
                                HTG 0
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Estimated Tax (2.5%) : </td>
                        <td class="text-end cart-tax">HTG {{ $taxAmount }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="m-0 fs-16 text-muted">Total:</h6>
            <div class="px-2">
               <h6 class="m-0 fs-16 cart-total">
                   @if(count($productsWithImages) > 0)
                       HTG {{ $totalAmountWithTaxAndShipping }}
                   @else
                       HTG 0
                   @endif
               </h6>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-6">
                <a href="{{ route('shopCart') }}" target="_self" class="btn btn-light w-100">Voir Panier</a>
            </div>
            <div class="col-6">
                <a href="{{ route('checkout') }}" target="_self" class="btn btn-info w-100">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- ---------------------------------------------------------------------end cart----------------------------------------------------------------------------------------------------->
<!-- Modal -->
<div class="modal fade  " id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded ">
            <div class="modal-header p-3">
                <div class="position-relative w-100">
{{--                    <form action="{{ route('search_topbar') }}" method="GET" class="input-group">--}}
                        <input type="text" name="query" class="form-control" autocomplete="off" placeholder="Rechercher Produits...">
                        <button type="submit" class="btn btn-primary">
                            <i class="ri-search-line search-icon text-white"></i>
                        </button>
{{--                    </form>--}}
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                <div class="dropdown-head rounded-top">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-14 text-muted fw-semibold"> RECENT SEARCHES </h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                        <a href="index" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                        <a href="index" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                    </div>
                </div>

                <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 my-3">
                    <div class="list-group list-group-flush border-dashed">
                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Apps Pages</h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-speedometer2 me-2"></i> <span>Analytics Dashboard</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-filetype-psd me-2"></i> <span>Toner.psd</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-ticket-detailed me-2"></i> <span>Support Tickets</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-file-earmark-zip me-2"></i> <span>Toner.zip</span></a>
                        </div>

                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Links</h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-link-45deg me-2 align-middle"></i> <span>www.themesbrand.com</span></a>
                        </div>

                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">People</h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                    <div>
                                        <h6 class="mb-0">Ayaan Bowen</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                    <div>
                                        <h6 class="mb-0">Alexander Kristi</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                    <div>
                                        <h6 class="mb-0">Alan Carla</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- removeItemModal -->
<div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn w-sm btn-danger cart_remove" id="remove-product">Yes, Delete It!</a>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="subscribeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-body p-0 bg-info-subtle rounded">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-4 h-100">
                            <span class="badge bg-info-subtle text-info fs-13">GET 10% SALE OFF</span>
                            <h2 class="display-6 mt-2 mb-3">Subscribe & Get <b>50% Special</b> Discount On Email</h2>
                            <p class="mb-4 pb-lg-2 fs-16">Join our newsletter to receive the latest updates and promotion</p>
                            <form action="#!">
                                <div class="position-relative ecommerce-subscript">
                                    <input type="email" class="form-control rounded-pill border-0" placeholder="Enter your email">
                                    <button type="submit" class="btn btn-info btn-hover rounded-pill">Subscript</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4 pb-0">
                            <img src="{{ URL::asset('build/images/subscribe.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

{{-- <a href="../backend/index" class="btn btn-warning position-fixed bottom-0 start-0 m-5 z-3 btn-hover d-none d-lg-block"><i class="bi bi-database align-middle me-1"></i> Backend</a> --}}

<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<a class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block" data-bs-toggle="collapse" href="#chatBot" aria-expanded="false" aria-controls="chatBot">Online Chat</a>
<div class="collapse chat-box" id="chatBot">
    <div class="card shadow-lg border-0 rounded-bottom-0 mb-0">
        <div class="card-header bg-success d-flex align-items-center border-0">
            <h5 class="text-white fs-16 fw-medium flex-grow-1 mb-0">Hi, Raquel Murillo 👋</h5>
            <button type="button" class="btn-close btn-close-white flex-shrink-0" onclick="chatBot()" data-bs-dismiss="collapse" aria-label="Close"></button>
        </div>
        <div class="card-body p-0">
            <div id="users-chat-widget">
                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 280px;">
                    <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Welcome to Themesbrand. We are here to help you. You can also directly email us at Support@themesbrand.com to schedule a meeting with our Technology Consultant.</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list right">
                            <div class="conversation-list">
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                    </ul>
                </div>
            </div>
            <div class="border-top border-top-dashed">
                <div class="row g-2 mt-2 mx-3 mb-3">
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                        </div>
                    </div><!-- end col -->
                    <div class="col-auto">
                        <button type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div>
    </div>
</div>
