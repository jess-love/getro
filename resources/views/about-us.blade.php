@extends('layouts.master')
@section('title')
    About Us
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="ecommerce-about">
        <div class="effect d-none d-md-block">
            <div class="ecommerce-effect bg-primary"></div>
            <div class="ecommerce-effect bg-info"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="fw-bold mb-3">👋 A propos de nous</h1>
                    <p class="fs-16 text-muted mb-5 mb-lg-3">Nous sommes et dynamique independant, et chaque jour nous creons pour vous des
                        evenements pour vous aider a faire vos achats en toute quietude. Des contenus et programmes qui vous procure de l'education,
                        des produits de la production locale qui vous permettra de rester connecter a l'embleme de notre cher Haiti!
                    </p>
                </div>
                <div class="col-lg-6">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="position-relative">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-4.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="vstack gap-4">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-1.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                    <img src="{{ URL::asset('build/images/ecommerce/img-3.jpg') }}" alt=""
                                        class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ecommerce-about-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-animate border-0">
                        <div class="card-body">
                            <lord-icon src="https://cdn.lordicon.com/fcoczpqi.json" trigger="hover" target="div"
                                style="width:70px;height:70px">
                            </lord-icon>
                            <h5 class="fs-16 mt-3">25,000+ Happy Customer</h5>
                            <p class="text-muted">La joie de nos clients marche avec la satisfaction que nous leur rendons a travers nos produits
                                en creant une connection emotionnelle avec nos marques.</p>
                            <div>
                                <a href="#!" class="link-effect link-primary">Lire Plus <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-animate border-0">
                        <div class="card-body">
                            <lord-icon src="https://cdn.lordicon.com/hbwqfgcf.json" trigger="hover" target="div"
                                style="width:70px;height:70px">
                            </lord-icon>
                            <h5 class="fs-16 mt-3">2+ Annees d'experience</h5>
                            <p class="text-muted">Les annees d'experience listees dans votre CV representent l'experience de travail
                                que vous avez.</p>
                            <div>
                                <a href="#!" class="link-effect link-primary">Lire Plus <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-animate border-0">
                        <div class="card-body">
                            <lord-icon src="https://cdn.lordicon.com/xhbsnkyp.json" trigger="hover" target="div"
                                style="width:70px;height:70px">
                            </lord-icon>
                            <h5 class="fs-16 mt-3">14 prix Gagne</h5>
                            <p class="text-muted">Les contenus global de nos prix excelle dans le marketing
                                et les agences dans notre gestion d'equipe.</p>
                            <div>
                                <a href="#!" class="link-effect link-primary">Lire Plus <i
                                        class="bi bi-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ecommerce-about-team bg-light bg-opacity-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="mb-3">Expert en gestion d'equipe/h2>
                        <P class="text-muted fs-15">Un expert est le premier et tout d'abord quelqu'un qui a un profond expertise
                            dans le milieu qu'il est entrain d'evoluer.</P>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}" alt=""
                                class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                        </div>
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>Marie Jessy BOUQUET</h5>
                            </a>
                            <p class="text-muted mb-0">Fondateur</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt=""
                                class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                        </div>
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>JB. Rotshil MOISE</h5>
                            </a>
                            <p class="text-muted mb-0">Gestionnaire</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                        </div>
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>Roselande ESTERVIL</h5>
                            </a>
                            <p class="text-muted mb-0">Marketing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-box text-center">
                        <div class="team-img">
                            <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}" alt=""
                                class="img-fluid rounded rounded-circle border border-dashed border-dark border-opacity-25">
                        </div>
                        <div class="mt-4 pt-1">
                            <a href="#!">
                                <h5>Wichley VALENTIN</h5>
                            </a>
                            <p class="text-muted mb-0">Comptable</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div>
                        <img src="{{ URL::asset('build/images/ecommerce/img-5.jpg') }}" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4 mt-lg-0">
                        <p class="text-uppercase fw-medium text-muted">Meilleurs produits en vente/p>
                        <h2 class="lh-base fw-semibold mb-3">Espace de production pour ameliorer votre business</h2>
                        <P class="text-muted fs-16">L’espace de bureau physique favorisera la collaboration et la compréhension.
                            Avoir un emplacement physique pour votre entreprise vous permet de constituer l'entreprise que vous
                            souhaitez dans un environnement où les employés peuvent communiquer entre eux sans avoir à se déplacer
                            à travers toutes les étapes supplémentaires.</P>
                        <a href="#!" class="fw-medium link-effect">Acheter Maintenant <i
                                class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section"
        style="background-image: url('build/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white lh-base text-capitalize">Ne manquez pas les offres spéciales</h1>
                        <p class="text-white-75 fs-15 mb-4 pb-2">Ne manquez rien de Belmache en vous inscrivant à notre
                            Bulletin.</p>
                        <form action="#!">
                            <div class="position-relative ecommerce-subscript">
                                <input type="email" class="form-control rounded-pill border-0"
                                    placeholder="Enter your email">
                                <button type="submit" class="btn btn-darken-primary rounded-pill">Inscrivez-vous Maintenant</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative py-5 border-bottom">
        <div class="container">
            <div class="row gy-4 gy-lg-0">
                <div class="col-lg-3 col-sm-6">
                    <div class="d-flex align-items-center gap-3">
                        <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/ecommerce/fast-delivery.png') }}" alt="" class="avatar-sm">
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-15">Rapide et efficace Livraison sécurisée</h5>
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
                            <h5 class="fs-15">24 X 7 Service</h5>
                            <p class="text-muted mb-0">Service en ligne pour le client</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </section>
@endsection
@section('scripts')
    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
    <script>
        initModeSetting()
    </script>
@endsection
