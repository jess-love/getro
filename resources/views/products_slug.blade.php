@extends('layouts.master')
@section('title')
    products_slug
@endsection
@section('css')
    <!-- extra css -->
    <!--Swiper slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- START PRODUCT -->
    <section class="section pt-0">
        <div class="container">

            <div class="row mt-5">
                <div class="col-lg-12">
                    @if(session('success'))
                        <di class="alert alert-success">
                            {{session('success')}}
                        </di>
                    @endif

                    <div class="row gallery-wrapper mt-4 pt-2 product_data">
                        <!----------------------------------------------getro------------------------------------------------------------------------------------->
                        @if($produits->isNotEmpty())
                            @foreach($view_products_slug  as $produit)
                                @php
                                    $productImage = $produit->product_images->first();
                                @endphp
                                <div class="element-item col-lg-3 col-md-4 col-sm-6 seller hot arrival"
                                     data-category="hot arrival">
                                    <div class="card overflow-hidden">
                                        <div class="bg-warning-subtle rounded-top py-4">
                                            <div class="gallery-product">

                                                <a href="{{route('view_product',['id'=>$produit->id]) }}">
                                                    @if(!empty($productImage->image))
                                                        <img src="{{ asset('build/images/products/'.$productImage->image) }}" alt=""
                                                             style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                                    @else
                                                        <img src="{{ asset('build/images/products/default.png')}}" alt=""
                                                             style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
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
                                                <input type="hidden" value="1" class="qty-input">
                                                <a href="shop-cart" class="btn btn-primary w-100 add-btn AddToCart1" data-product-id="{{$produit->id}}">
                                                    <i class="mdi mdi-cart me-1"></i> Add To Cart
                                                </a>
                                            </div>


                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <a href="product-details">
                                                    <h6 class="fs-15 lh-base text-truncate mb-0">{{$produit->title}} <br> <span style="font-weight:normal;"> {{$produit->description}} </span> </h6>
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
                        @endif
                        <!-- end col -->
                    </div>
                    <!----------------------------------------------end getro code------------------------------------------------------------------------------------->

                    <div class="mt-4 text-center">
                        <a href="{{route('products_left') }}" class="btn btn-soft-primary btn-hover">Voir tous les Produits
                            <i class="mdi mdi-arrow-right align-middle ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END PRODUCT -->
@endsection

@section('scripts')
    <!-- isotope-layout -->
    <script src="{{ URL::asset('build/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Countdown js -->
    <script src="{{ URL::asset('build/js/pages/coming-soon.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/landing-index.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>

    <script src="{{ URL::asset('build/js/jess.js') }}"></script>

@endsection
