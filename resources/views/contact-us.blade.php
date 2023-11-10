@extends('layouts.master')
@section('title')
    Starter
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <section class="ecommerce-about bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="text-center">
                        <h1 class="text-white">Contacter Nous</h1>
                        <p class="fs-16 mb-0 text-white-75">Commencons par quelque chose fabuleux. Restez en contact avec notre
                            equipe pour une meilleure collaboration!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border border-opacity-25">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-primary-subtle text-primary rounded fs-17">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="fs-17 lh-base mb-2">Notre bureau principal</h5>
                                    <p class="text-muted fs-14 mb-0">Angle Rues Joseph et Mgr Guilloux, Port-au-Prince, Ouest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-opacity-25">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-17">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="fs-17 lh-base mb-2">Numero de Telephone</h5>
                                    <p class="text-muted fs-14 mb-0">+(509) 3451 6959<br>+(509) 2942 1923 (Appel Gratuit)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-opacity-25">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-success-subtle text-success rounded fs-17">
                                        <i class="bi bi-newspaper"></i>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="fs-17 lh-base mb-2">Fax</h5>
                                    <p class="text-muted fs-14 mb-0">+(509) 2942 1923</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-opacity-25">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-danger-subtle text-danger rounded fs-17">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="fs-17 lh-base mb-2">Email</h5>
                                    <p class="text-muted fs-14 mb-0">projetfds22@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="custom-form card p-4 p-lg-5">
                        <form name="myForm" action="#!">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center mb-4">
                                        <h3 class="text-capitalize">Restons en contact pour plus d'information</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="nameInput" class="form-label">Nom<span
                                                class="text-danger">*</span></label>
                                        <input name="nameInput" id="nameInput" type="text" class="form-control"
                                            placeholder="Entrer votre name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="emailInput" class="form-label">Email<span
                                                class="text-danger">*</span></label>
                                        <input name="emailInput" id="emailInput" type="email" class="form-control"
                                            placeholder="Entrer votre email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label for="subjectInput" class="form-label">Objet<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="subjectInput"
                                            placeholder="Entrer l'objet..">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label for="messageInput" class="form-label">Message<span
                                                class="text-danger">*</span></label>
                                        <textarea name="messageInput" id="messageInput" rows="4" class="form-control" placeholder="Entrer le message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="text-end mt-4">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Envoyer <i
                                                class="bi bi-arrow-right-short align-middle fs-16 ms-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3024.4645962375394!2d-74.01354043428768!3d40.7077878458095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSoHo%2094%20Broadway%20St%20New%20York%2C%20NY%201001!5e0!3m2!1sen!2sin!4v1669110084163!5m2!1sen!2sin"
                            class="w-100" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- menu js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
