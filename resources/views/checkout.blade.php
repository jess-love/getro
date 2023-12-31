@extends('layouts.master')
@section('title')
    Checkout
@endsection
@section('css')
@endsection
<style>
    .swiper {
        overflow: hidden;
    }

    .swiper-wrapper {
        display: flex;
        transition: transform 0.3s ease;
    }

    .swiper-slide {
        width: 100%;
        box-sizing: border-box;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #000;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .swiper-button-next {
        right: 0;
    }

    .swiper-button-prev {
        left: 0;
    }
</style>
@section('content')
    @php
        $totalAmount = 0;
    @endphp
    <?php
    $totalAmount = session('totalAmount', 0);
    if (isset($totalAmount)) {
        $taxPercentage = 2.5;
        $taxAmount = ($totalAmount * $taxPercentage) / 100;
        $shippingCharge = 100;

        $totalAmountWithTaxAndShipping = $totalAmount + $taxAmount + $shippingCharge;
    } else {
        $totalAmountWithTaxAndShipping = 0;
    }
    ?>
    <section class="page-wrapper bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center d-flex align-items-center justify-content-between">
                        <h4 class="text-white mb-0">Checkout</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="{{route('products_left')}}">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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

    <section class="section">
        <div class="container">
            {{-- cette balise est la pour verifier si le user s'est deconnecte et est retourne sur cette page--}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-modern alert-dismissible fade show" role="alert">
                        <i class="bi bi-box-arrow-in-right icons"></i>Vous etes de retour?<a href="auth-signin-basic"
                            class="link-danger"><strong> Cliquer ici pour vous connecter</strong>.</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->


            <div class="row">
                <div class="col-xl-8">
                    {{-- Afficher les produits du panier start --}}
                    <div class="mt-4 pt-2">
                        <div class="">
                            <div class="table-responsive table-card">
                                <div class="col-lg-12">
                                    <div class="swiper mySwiper d-flex flex-row" dir="ltr">
                                        <div class="swiper-wrapper">
                                            @foreach($productsWithImages as $item)
                                                <div class="swiper-slide">
                                                    <div class="card card-animate overflow-hidden product-slide">
                                                        <img src="{{ URL::asset('build/images/products/'.$item->product_images->first()->image) }}" alt=""
                                                             style="max-height: 215px; max-width: 100%;" class="mx-auto d-block">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Afficher les produits du panier end --}}

                    {{-- Adddresse de livraison start--}}
                    <div class="mt-4 pt-2">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-grow-1">
                                <h5 class="mb-0">Adddresse de Livraison</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="{{route('address')}}" class="badge bg-secondary-subtle text-secondary link-secondary">
                                    Ajouter Adresse
                                </a>
                            </div>
                        </div>
                        <div class="row gy-3">
                            @php
                                $addresses = $users->address ?? collect();
                                $addressChunks = $addresses->chunk(2);
                            @endphp

                            @foreach($addressChunks as $addressPair)
                                <div class="row g-4">
                                    <div class="row g-4">
                                        @foreach($addressPair as $index => $address)
                                            <div class="col-lg-6">
                                                <div class="form-check card-radio" id="address{{ $index + 1 }}" data-address-id="{{ $address->id }}">
                                                    <input id="shippingAddress{{ $index + 1 }}" name="shippingAddress" type="radio" class="form-check-input" checked>
                                                    <label class="form-check-label" for="shippingAddress{{ $index + 1 }}">
                                                        <span class="fs-16 mb-2 fw-semibold d-block"> Adresse {{ $index + 1 }}</span>
                                                        <span class="text-muted fw-normal text-wrap mb-1 d-block">{{ $address->firstname }} {{ $address->lastname }}</span>
                                                        <span class="text-muted fw-normal text-wrap mb-1 d-block"> {{ $address->street }}, {{ $address->city }}, {{ $address->country }} </span>
                                                        <span class="text-muted fw-normal d-block">+509 {{ $address->phone }}</span>
                                                    </label>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-xl-12">
                        <h5 class="mb-0 flex-grow-1">Payment Selection</h5>
                        <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3 mt-4 nav-justified custom-nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link py-3" data-bs-toggle="tab" href="#credit" role="tab">
                                    <span class="d-block d-sm-none"><i class="ri-bank-card-fill align-bottom"></i></span>
                                    <span class="d-none d-sm-block"> <i class="ri-bank-card-fill align-bottom pe-2"></i> Credit
                                    / Debit Card</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link py-3" data-bs-toggle="tab" href="#cash" role="tab">
                                    <span class="d-block d-sm-none"><i class="ri-money-dollar-box-fill align-bottom"></i></span>
                                    <span class="d-none d-sm-block"> <i class="ri-money-dollar-box-fill align-bottom pe-2"></i>
                                   Mon Cash</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content text-muted">
                            {{--    Debit credit card   --}}
                            <div class="tab-pane" id="credit" role="tabpanel">
                                <div class="card">
                                    <form method="post" action="/session">
                                        <div class="card-body">
                                            <div class="text-center py-3">
                                                <div class="d-flex align-items-center justify-content-center flex-column">
                                                    <div class="avatar-md mb-4">
                                                        <img src="{{ URL::asset('build/images/ecommerce/payment/payment.png') }}" alt="Logo" class="img-fluid" style="max-width: 1000%; height: 60px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hstack gap-2 justify-content-end pt-4">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <?php
                                                    $totalUSD = $totalAmountWithTaxAndShipping
                                                ?>
                                                <input type='hidden' name="total" value="{{$totalUSD }}">
                                                <input type='hidden' name="productname" value="Total a Payer:">
                                                <button type="submit" class="btn btn-hover w-md btn-primary">Payer<i class="ri-logout-box-r-line align-bottom ms-2"></i></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            {{--    mon cash --}}
                            <div class="tab-pane" id="cash" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center py-3">
                                            <div class="avatar-md mx-auto mb-4">
                                                        <img src="{{ URL::asset('build/images/logo_mon_cash.png') }}" alt="Logo" class="align-bottom pe-2" style="width: 200%; height: 100px;">
                                            </div>
                                            <h5 class="fs-16 mb-3"></h5>
                                            <p class="text-muted mt-3 mb-0 w-75 mx-auto"></p>
                                        </div>
                                        <div class="hstack gap-2 justify-content-end pt-3">
                                            <button type="button" class="btn btn-hover w-md btn-primary">Payer<i
                                                    class="ri-logout-box-r-line align-bottom ms-2"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                {{--code promo et historique commande start --}}
                <div class="col-lg-4">
                    <div class="sticky-side-div">
                        <div class="card">
                            {{-- Code promo --}}
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3 fs-14">Vous avez un <span class="fw-semibold">Code</span> promo ?</h6>
                                </div>
                                <div class="hstack gap-3 px-3 mx-n3">
                                    <input class="form-control me-auto" type="text" placeholder="Entrer code coupon"
                                        value="BelMache22" aria-label="Ajouter code promo ici...">
                                    <button type="button" class="btn btn-success w-xs text-center">
                                            <span class="mx-auto d-flex align-items-center">Appliquer</span>
                                    </button>

                                </div>
                            </div>
                        </div>

                        {{--Resume commande--}}
                        <div class="card overflow-hidden">
                            <div class="card-header border-bottom-dashed">
                                <h5 class="card-title mb-0 fs-15">Résumé Commande</h5>
                            </div>
                            <div class="card-body pt-4">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless mb-0 fs-15">
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
                                        <tr>
                                            <td>Discount <span class="text-muted">(BelMache)</span>:</td>
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
                                        <tr class="table-active">
                                            <th>Total (USD) :</th>
                                            <td class="text-end">
                                                @if(count($productsWithImages) > 0)
                                                    HTG {{ $totalAmountWithTaxAndShipping }}
                                                @else
                                                    HTG 0
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end table-responsive -->
                            </div>
                        </div>
                        <div class="hstack gap-2 justify-content-between justify-content-end">
                            <a href="{{route('shopCart')}}" class="btn btn-hover btn-soft-info w-100">Retour au Panier <i
                                    class="ri-arrow-right-line label-icon align-middle ms-1"></i></a>
                        </div>
                    </div>
                    <!-- end stickey -->
                </div>
                {{--code promo et historique commande end --}}
            </div>

        </div>
        <!--end container-->
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
                                class="link-info fw-medium">Toner</a></p>
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

    <section class="section py-5">
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


    <!-- removeAddressModal -->
    <div id="removeAddressModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Address ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <!-- form wizard init -->
    <script src="{{ URL::asset('build/js/pages/form-wizard.init.js') }}"></script>
    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('VOTRE_CLE_PUBLIQUE_STRIPE');
        var elements = stripe.elements();

        var card = elements.create('card');
        card.mount('#card-element');

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.confirmCardPayment(
                'CLIENT_SECRET_RECU_DU_SERVEUR',
                {
                    payment_method: {
                        card: card,
                    }
                }
            ).then(function(result) {
                if (result.error) {
                    // Gérer les erreurs lors du paiement
                } else {
                    // Rediriger ou afficher un message de succès
                }
            });
        });
    </script>

@endsection
