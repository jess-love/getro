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
                        <h1 class="text-white mb-0">TOUS LES PRODUITS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="ecommerce-product ">
                <div class="flex-grow-1" style="overflow-x: hidden;">
                    <div class="d-flex align-items-center justify-content-between gap-2 mb-4">

                        {{--Start Research--}}
                        <div class="search-box">
                            <form action="{{ route('search_list_left') }}" method="GET" class="input-group">
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
                                    <form action="{{ route('products_left') }}" method="GET">
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
                        @if ($products->count() === 0)
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
                            <div class="row">
                                    @foreach($products as $produit)
                                        @php
                                            $productImage = $produit->product_images->first();
                                        @endphp
                                        <div class="element-item col-md-3 col-sm-3  seller hot arrival"
                                             data-category="hot arrival">
                                            <div class="card overflow-hidden">
                                                <div class="bg-warning-subtle rounded-top py-4">
                                                    <div class="gallery-product">

                                                        <a href="{{route('view_product',['id'=>$produit->id]) }}">
                                                            @if(!empty($productImage->image))
                                                                <img src="{{ asset('build/images/products/'.$productImage->image) }}" alt=""
                                                                     style="max-height: 215px;max-width: 100%; width: auto;" class="mx-auto d-block">
                                                            @else
                                                                <img src="{{ asset('build/images/products/default.png')}}" alt=""
                                                                     style="max-height: 215px; max-width: 100%; width: auto;" class="mx-auto d-block">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">{{$produit->slog}}
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
                                                            <a href="{{route('view_product',['id'=>$produit->id]) }}" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-eye align-bottom fs-15"></i></a>
                                                        </div>

                                                    </div>
                                                    <div class="product-btn px-3">
                                                        <a href="javascript:void(0);" onclick="AddToCart({{$produit->id}});"  class="btn btn-primary btn-sm w-75 add-btn">
                                                            <i class="mdi mdi-cart me-1"></i> Add to cart
                                                        </a>
                                                    </div>

                                                </div>
                                                <div class="card-body">
                                                    <div>
                                                        <a href="product-details">
                                                            <h6 class="fs-15 lh-base text-truncate mb-0"> </b> {{$produit->title}} </b> <br> <span style="font-weight:normal;"> {{$produit->description}} </span> </h6>
                                                        </a>
                                                        <div class="mt-3">
                                                <span class="float-end">4.9 <i
                                                        class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="mb-0">{{number_format($produit->unit_price,2) }}$ <span>   </span><span
                                                                    class="text-muted fs-12"><del>{{number_format($produit->discount,2)}}$</del></span></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>

                        @endif
                    </div>
                    {{--End Product List--}}

                    {{--Start Pagination--}}
{{--                    <div class="" >--}}
{{--                        <form><div class="pagination page-item" >--}}
{{--                                {{ $products->appends(request()->except('page'))->links() }}--}}
{{--                            </div></form>--}}
{{--                    </div>--}}
                    <div class="">
                        <form class="custom-pagination-form">
                            <div class="pagination page-item">
                                {{ $products->appends(request()->except('page'))->links() }}
                            </div>
                        </form>
                    </div>

                    {{--End Pagination--}}
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
