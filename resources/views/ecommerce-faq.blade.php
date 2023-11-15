@extends('layouts.master')
@section('title')
    Faqs
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="ecommerce-about bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="text-white mb-0">Questions fréquemment posées</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mt-4 fs-15">
                                <li class="breadcrumb-item"><a href="#">Boutique</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Faq's</li>
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
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h3>Avez-vous des questions ?</h3>
                        <p class="text-muted mb-4">Vous pouvez demander tout ce que vous voulez savoir sur les commentaires.</p>
                        <div class="hstack flex-wrap gap-2 justify-content-center">
                            <button type="button" class="btn btn-primary btn-label rounded-pill"><i
                                    class="ri-mail-line label-icon align-middle rounded-pill fs-16"></i> Email nous</button>
                            <button type="button" class="btn btn-info btn-label rounded-pill"><i
                                    class="ri-twitter-line label-icon align-middle rounded-pill fs-16"></i> Envoyez-nous des
                                Tweets</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row mt-5">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4 position-relative">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Commander</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Paiements</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Livraison</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card text-center mt-4">
                        <div class="card-body">
                            <div class="avatar-md mx-auto mb-4">
                                <div class="avatar-title bg-success-subtle text-success rounded-circle h1 m-0">
                                    <i class="bi bi-bag-dash"></i>
                                </div>
                            </div>
                            <h5 class="fs-16 mb-3"><a href="#" class="text-body stretched-link">Retour</a></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 justify-content-center mt-2">
                <div class="col-xxl-8 col-lg-8">
                    <div>
                        <div class="mb-4">
                            <h5 class="fs-16 mb-0 fw-semibold">Questions Generaux</h5>
                        </div>

                        <div class="accordion accordion-border-box" id="genques-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseOne" aria-expanded="true"
                                        aria-controls="genques-collapseOne">
                                        C'est quoi FAQ questions?
                                    </button>
                                </h2>
                                <div id="genques-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="genques-headingOne" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        Un FAQ page <b>(abréviation de page de questions fréquemment posées)</b> fait partie de votre
                                        site Web qui fournit des réponses aux questions courantes, apaise les inquiétudes et surmonte
                                        objections. C'est un espace où les clients s'éloignent de vos pages de destination axées sur les ventes
                                        et page d'accueil.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseTwo" aria-expanded="false"
                                        aria-controls="genques-collapseTwo">
                                        C'est quoi FAQ processus?
                                    </button>
                                </h2>
                                <div id="genques-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingTwo" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        FAQ signifie Foire aux questions. C'est <b>votre opportunité de communiquer
                                            avec les visiteurs les plus importants de votre site Web</b> – ceux qui ont commencé le
                                        le processus de prise de décision concernant l'opportunité de faire affaire avec vous ne peut pas s'adapter ailleurs
                                        leur site internet.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseThree" aria-expanded="false"
                                        aria-controls="genques-collapseThree">
                                        Quel est l'objectif de FAQ?
                                    </button>
                                </h2>
                                <div id="genques-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingThree" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        Le but d'une FAQ est généralement de fournir des informations sur des questions fréquentes ou
                                        préoccupations; cependant, le format est un moyen utile d'organiser l'information et le texte
                                        composé de questions et de leurs réponses peut donc être appelé une FAQ malgré tout.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="genques-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#genques-collapseFour" aria-expanded="false"
                                        aria-controls="genques-collapseFour">
                                        Qu'est-ce qu'un FAQ en ligne ?
                                    </button>
                                </h2>
                                <div id="genques-collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="genques-headingFour" data-bs-parent="#genques-accordion">
                                    <div class="accordion-body">
                                        Les FAQ représentent les questions fréquemment posées. C'est l'une des nombreuses pages cruciales de
                                        votre site web. Il donne à vos clients des réponses aux questions récurrentes et courantes et
                                        répond à leurs préoccupations, la documentation publique du produit est publiée en même temps
                                        temps.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end accordion-->
                    </div>
                </div>
                <!--end col-->
            </div>


        </div>
        <!--end container-->
    </section>

    <section class="section"
        style="background-image: url('build/images/profile-bg.jpg'); background-size: cover;background-position: center;">
        <div class="bg-overlay bg-secondary" style="opacity: 0.85;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-sm-flex align-items-center">
                        <h2 class="text-white text-capitalize mb-0 flex-grow-1">Dites-nous comment nous pouvons vous aider</h2>
                        <div class="flex-shrink-0 mt-3 mt-sm-0">
                            <a href="contact-us" class="btn btn-darken-secondary btn-hover"><i
                                    class="ph-phone align-middle me-1"></i> Contacter Nous</a>
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
    <!-- Masonry plugin -->
    <script src="{{ URL::asset('build/libs/masonry-layout/masonry.pkgd.min.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
