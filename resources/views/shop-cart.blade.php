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
                        <h4 class="text-white mb-0">PANIER</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Panier</li>
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
                <div class="col-lg-8">
                    <div class="alert alert-danger text-center text-capitalize mb-4 fs-14">
                        Sauvegarder jusqu'a <b>30%</b> a <b>40%</b> de réduction OMG! Aller vite pour <b>de bon deal</b>!
                    </div>
                </div>
            </div>
            <div class="row product-list justify-content-center">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center mb-4">
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

                            <h5 class="mb-0 flex-grow-1 fw-medium">
                                Il y a <span class="fw-bold product-count">{{ $totalProducts }}</span> produit(s) différent(s) dans votre panier
                            </h5>
                        @else
                            <!-- Si le panier est vide, n'affichez pas le code -->
                        @endif

                        <div class="flex-shrink-0">
                                <a href="" class="text-decoration-underline link-secondary" onclick="emptyCart()">Supprimer panier</a>
                            </div>
                    </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif


                    {{-- {{dd($cartContent);}} --}}
                @if($cartContent->isNotEmpty())
                
                    @foreach($cartContent as $item)
                       
                       <div class="card product product_data">
                        <div class="card-body p-4 ">
                            <div class="row gy-3">
                                <div class="col-sm-auto">
                                    <div class="avatar-lg h-100">
                                        <div class="avatar-title bg-danger-subtle rounded py-3">


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
                                            <a href="#"> <input type="checkbox" class="form-check-input delete-checkbox" data-prod-id="{{ $item->id }}">
                                                <h5 class="fs-16 lh-base mb-1">{{ $item->title ?? 'N/A' }}</h5>
                                            </a>
                                            <ul class="list-inline text-muted fs-13 mb-3">
                                                <li class="list-inline-item">Color: <span class="fw-medium">{{ $item->product_images->isNotEmpty() ? $item->product_images->first()->color : 'N/A' }}</span></li>
                                                <li class="list-inline-item">Size: <span class="fw-medium">{{ $item->product_images->isNotEmpty() ? $item->product_images->first()->size : 'N/A' }}</span></li>
                                            </ul>

                                            <div class="input-step ms-2">
                                                <input type="hidden" value="{{ $item->id }}" class="prod_id">
                                                <button class="decrement-btn changeQty">–</button>
                                                <input name="quantity" type="number" class="qty-input" value="{{ $item->cart->quantity ?? 'N/A' }}" min="0" max="100">
                                                <button class="increment-btn changeQty">+</button>
                                            </div>
                                        </div>

                                        <div class="col-sm-auto">
                                            <div class="text-lg-end">
                                                <p class="text-muted mb-1 fs-12">Prix:</p>
                                                <h5 class="fs-16">HTG <span class="product-price">{{ $item->unit_price ?? 'N/A' }}</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>

                                    <a href="" class="d-block text-body p-1 px-2 btn-delete-item" data-bs-toggle="modal">
                                        <i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Retirer
                                    </a>
                                </div>
                                @endforeach
                                <div class="card-footer">
                                    <div class="row align-items-center gy-3">
                                        <div class="col-sm">
                                            <div class="d-flex flex-wrap my-n1">
                                                <div>
                                                    <div class="text-end mt-3">
                                                        <button class="btn btn-danger delete-selected">Supprimer Selectionés</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex align-items-center gap-2 text-muted">
                                                <div>Total :</div>
                                                <h5 class="fs-14 mb-0">HTG <span class="product-line-price">{{ $totalAmount }}</span></h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-auto">
                                    <div class="d-flex align-items-center gap-2 text-muted">
                                        <div>Total :</div>
                                        <h5 class="fs-14 mb-0">$<span class="product-line-price">8</span></h5>
                                    </div>

                                    <!-- end card footer -->

                                </div>
                            </div>

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
                    <!--end card-->
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="sticky-side-div text-center my-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h6 class="mb-3 fs-15">J'ai un<span class="fw-semibold">code</span> promo ?</h6>
                                </div>
                                <div class="hstack gap-3 px-3 mx-n3">
                                    <input class="form-control me-auto" type="text" placeholder="Entrer coupon code" value="" aria-label="Ajouter Promo Code ici...">
                                    <button type="button" class="btn btn-primary w-xs">
                                        <span class="d-flex align-items-center">
                                            <span class="mx-auto">Appliquer</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="card overflow-hidden">
                            <div class="card-header border-bottom-dashed">
                                <h5 class="card-title mb-0 fs-15">Résumé Commande</h5>
                            </div>
                            <div class="card-body pt-4 text-start">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless mb-0 fs-15">
                                        <tbody>
                                        <tr>
                                            <td>Sub Total :</td>

                                            <td class="text-end cart-subtotal">$ 9</td>
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
                        <div class="hstack gap-2 justify-content-end">
                            <a href="{{route('products_left') }}" >
                              <button type="button" class="btn btn-hover btn-danger">Continue Shopping</button>
                            </a>
                            <a href="{{ route('checkout') }}">
                                <button type="button" class="btn btn-hover btn-success">
                                    Check Out <i class="ri-logout-box-r-line align-bottom ms-1"></i>
                                </button>
                            </a>

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
                        <h4 class="flex-grow-1 mb-0">Nouvelle Arrivée de Produits</h4>
                        <div class="flex-shrink-0">
                            <a href="{{route('products_left') }}" class="link-effect link-primary">tous les Products <i
                                    class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row justify-content-center">
            @foreach($products as $product)
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden card-animate">
                            <a href="{{route('view_product',['id'=>$product->id]) }}">
                                <div class="bg-light bg-opacity-50 rounded py-4 position-relative">
                                    <img src="{{ URL::asset('build/images/products/'.$product->product_images->first()->image) }}" alt=""
                                         style="max-height: 200px;max-width: 100%;" class="mx-auto d-block rounded-2">
                                    <div class="action vstack gap-2">
                                        <button class="btn btn-danger avatar-xs p-0 btn-soft-warning custom-toggle product-action"
                                                data-bs-toggle="button"><span class="icon-on"><i
                                                    class="ri-heart-line"></i></span><span class="icon-off"><i
                                                    class="ri-heart-fill"></i></span></button>
                                    </div>
                                </div>
                            </a>
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
                                <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">{{$product->slog}}
                                <a href="#!">
                                    <h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">{{$product->title}}</h6>
                                </a>
                                <div class="mt-2">
                                    <span class="float-end">4.1 <i
                                            class="ri-star-half-fill text-warning align-bottom"></i></span>
                                    <h5 class="mb-0">HTG {{$product->unit_price}}</h5>
                                </div>
{{--                                <div class="mt-3">--}}
{{--                                    <a href="#!" class="btn btn-primary w-100 add-btn"><i class="mdi mdi-cart me-1"></i>--}}
{{--                                        Add To Cart</a>--}}
                            </div>

                        </div>
                    </div>
                @endforeach
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
                        <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">Jusqu'a 25%</span>
                            de reduction sur tous nos Produits</p>
                        <h1 class="lh-base text-capitalize mb-3">Restez à la maison et obtenez vos besoins quotidiens dans notre boutique</h1>
                        <p class="fs-15 mb-4 pb-2">Commencez vos achats quotidiens avec <a href="#!"
                                                                                      class="link-primary text-decoration-underline fw-medium">Bel Mache</a></p>
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
@endsection

@section('scripts')
    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
    <script type="text/javascript">

    </script>

@endsection
