@extends('layouts.master')
@section('title')
    Store Locator
@endsection
@section('css')
    <!-- extra css -->
    <!-- plugin css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <section class="ecommerce-about bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-2">Toner Store Locator</h1>
                        <p class="text-white-75 mb-0">Last Updated 24 Nov, 2022</p>
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
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <h5 class="fs-18 mb-4">Store Location</h5>
                    </div>
                    <div class="mx-n3">
                        <div data-simplebar style="max-height: 450px;" class="px-3">
                            <div class="card border-0 shadow-lg">
                                <div class="card-body p-4">
                                    <h5 class="text-capitalize lh-base fs-16 mb-1">Russia</h5>
                                    <p class="fs-14">Brusneva Ul., bld. 8, appt. 34, Stavropol, Russia</p>
                                    <div>
                                        <a href="#!" class="link-effect link-danger fw-medium">View On Map <i
                                                class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 shadow-lg">
                                <div class="card-body p-4">
                                    <h5 class="text-capitalize lh-base fs-16 mb-1">Israel</h5>
                                    <p class="fs-14">122 Maplewood Ave Toronto Ontario M6C1J6,Lod, Israel</p>
                                    <div>
                                        <a href="#!" class="link-effect link-danger fw-medium">View On Map <i
                                                class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 shadow-lg">
                                <div class="card-body p-4">
                                    <h5 class="text-capitalize lh-base fs-16 mb-1">Germany</h5>
                                    <p class="fs-14">Untersbergstraße 26, 81539 München, Germany</p>
                                    <div>
                                        <a href="#!" class="link-effect link-danger fw-medium">View On Map <i
                                                class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 shadow-lg">
                                <div class="card-body p-4">
                                    <h5 class="text-capitalize lh-base fs-16 mb-1">Colombia</h5>
                                    <p class="fs-14">Cl 33 No. 31-18, C.P 76520, Palmira, Colombia</p>
                                    <div>
                                        <a href="#!" class="link-effect link-danger fw-medium">View On Map <i
                                                class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8">
                    <div id="world-map-markers" data-colors='["--tb-light"]' style="height: 500px" dir="ltr"></div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end conatiner-->
    </section>

    <section class="position-relative py-5"
        style="background-image: url('build/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-secondary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex align-items-center">
                        <h2 class="text-white mb-0 flex-grow-1">Let us know how we can help you</h2>
                        <div class="flex-shrink-0">
                            <a href="contact-us" class="btn btn-darken-primary btn-hover"><i
                                    class="ph-phone align-middle me-1"></i> Contact Us</a>
                        </div>
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
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="mb-3">Store Details</h2>
                        <p class="text-muted">A typical online store enables the customer to browse the firm's range of
                            products and services, view photos or images of the products.</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="card overflow-hidden mb-0">
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap mb-0 fs-14">
                                    <thead>
                                        <tr>
                                            <th scope="col">Store Name</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact No.</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Themesbrand - Main Branch</th>
                                            <td>Russia</td>
                                            <td>support@themesbrand.com</td>
                                            <td>+(234) 12345 67890</td>
                                            <td><a href="#!" class="link-effect link-primary">View Map <i
                                                        class="ri-arrow-right-line align-bottom"></i></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Toner</th>
                                            <td>Israel</td>
                                            <td>example@Toner.com</td>
                                            <td>+(741) 65432 19870</td>
                                            <td><a href="#!" class="link-effect link-primary">View Map <i
                                                        class="ri-arrow-right-line align-bottom"></i></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Toner</th>
                                            <td>Germany</td>
                                            <td>example@Toner.com</td>
                                            <td>+(365) 98765 43210</td>
                                            <td><a href="#!" class="link-effect link-primary">View Map <i
                                                        class="ri-arrow-right-line align-bottom"></i></a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Skote</th>
                                            <td>Colombia</td>
                                            <td>example@skote.com</td>
                                            <td>+(137) 34567 89012</td>
                                            <td><a href="#!" class="link-effect link-primary">View Map <i
                                                        class="ri-arrow-right-line align-bottom"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
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

    <section class="position-relative py-5 border-top">
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
    <!-- Vector map-->
    <script src="{{ URL::asset('build/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jsvectormap/world-merc.js') }}"></script>

    <script src="{{ URL::asset('build/js/frontend/store-locator.init.js') }}"></script>
    <!-- menu js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
