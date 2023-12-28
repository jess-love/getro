@extends('layouts.master')
@section('title')
    Commande
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
                        <h4 class="text-white mb-0">Commande</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Confirmation</li>
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
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center">
                                <img src="{{ URL::asset('build/images/success-img.png') }}" alt="" class="w-50">
                            </div>

                            <div class="text-center mt-5 pt-1">
                                @if(isset($order))
                                    <h4 class="mb-3 text-capitalize">Votre commande est passée !</h4>
                                    <p class="text-muted mb-2">Vous recevrez un email de confirmation de commande avec les détails de votre commande.</p>
                                    <p class="text-muted mb-0">ID Commande:  {{  $order->order_id_generate  }}</p>
                                    @if(isset($order))
                                        <div class="mt-4 pt-2 hstack gap-2 justify-content-center">
                                            <a href="order-history" class="btn btn-primary btn-hover">Voir Commande <i
                                                    class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                            <a href="{{ route('product_page') }}" class="btn btn-soft-danger btn-hover">Retourner à l'accueil <i
                                                    class="ri-home-4-line align-bottom ms-1"></i></a>
                                        </div>
                                    @endif
                                @else
                                    <p>La commande correspondante à l'ID est introuvable.</p>
                                @endif

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
            <div class="row gy-4">
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
@endsection
