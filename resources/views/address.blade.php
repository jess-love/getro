@extends('layouts.master')
@section('title')
    Address
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
                        <h4 class="text-white mb-0">Adresse de Livraison</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-light justify-content-center mb-0 fs-15">
                                <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Adresse</li>
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
            <div class="col-xl-12">
{{--************************************************************--}}
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    <script>
                        function selectAddress(index, addressId) {
                            // Supprime la classe "selected" de tous les éléments
                            document.querySelectorAll('.form-check.card-radio').forEach(function (element) {
                                element.classList.remove('selected');
                            });

                            // Ajoute la classe "selected" à l'élément cliqué
                            const selectedAddress = document.getElementById('address' + index);
                            selectedAddress.classList.add('selected');


                            // Récupère les données de l'adresse sélectionnée
                            const data = {
                                lastname: selectedAddress.querySelector('.lastname').innerText,
                                firstname: selectedAddress.querySelector('.firstname').innerText,
                                street: selectedAddress.querySelector('.street').innerText,
                                phone: selectedAddress.querySelector('.phone').innerText,
                                city: selectedAddress.querySelector('.city').innerText,
                                zip_code: selectedAddress.querySelector('.zip_code').innerText,
                                country: selectedAddress.querySelector('.country').innerText,
                            };

                            // Remplit le formulaire de modification
                            document.getElementById('editAddressForm').action = '{{ route("updateAddress") }}';
                            document.getElementById('address_id').value = addressId;
                            document.getElementById('lastname').value = data.lastname;
                            document.getElementById('firstname').value = data.firstname;
                            document.getElementById('street').value = data.street;
                            document.getElementById('phone').value = data.phone;
                            document.getElementById('city').value = data.city;
                            document.getElementById('zip_code').value = data.zip_code;
                            document.getElementById('country').value = data.country;

                            // Affiche le modal de modification
                            const editModal = new bootstrap.Modal(document.getElementById('EditAddressModal'));
                            editModal.show();
                        }

{{--                        --}}{{-- Code js pour retirer une adresse--}}
{{--                        function confirmRemoveAddress(addressId) {--}}
{{--                            // Mettre à jour l'attribut data-address-id du bouton de suppression--}}
{{--                            document.getElementById('remove-address').setAttribute('data-address-id', addressId);--}}
{{--                        }--}}
{{--                        window.addEventListener('DOMContentLoaded', (event) => {--}}
{{--                            document.getElementById('remove-address').addEventListener('click', function () {--}}
{{--                                console.log('Button clicked!');--}}
{{--                                // Récupérer l'ID de l'adresse depuis l'attribut data-address-id--}}
{{--                                var addressId = this.getAttribute('data-address-id');--}}
{{--                                console.log('Address ID:', addressId);--}}

{{--                                // Envoyer une requête AJAX pour supprimer l'adresse--}}
{{--                                fetch('/remove-address/' + addressId, {--}}
{{--                                    method: 'POST',--}}
{{--                                    headers: {--}}
{{--                                        'Content-Type': 'application/json',--}}
{{--                                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ajoutez le jeton CSRF si nécessaire--}}
{{--                                    },--}}
{{--                                })--}}
{{--                                    .then(response => response.json())--}}
{{--                                    .then(data => {--}}
{{--                                        // Traiter la réponse du serveur après la suppression réussie--}}
{{--                                        alert(data.message);--}}
{{--                                        // Vous pouvez également mettre à jour la page ou effectuer d'autres actions nécessaires--}}
{{--                                    })--}}
{{--                                    .catch(error => {--}}
{{--                                        // Traiter les erreurs ici--}}
{{--                                        alert('Erreur lors de la suppression de l\'adresse.');--}}
{{--                                    });--}}

{{--                                // Fermer le modal après la suppression réussie--}}
{{--                                $('#removeAddressModal').modal('hide');--}}
{{--                            });--}}
{{--                        });--}}


                    </script>

                    {{--************************************************************--}}
                    <div>
                        <h4 class="fs-18 mb-4">Sélectionner ou Ajouter une Adresse</h4>
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
                                                </label> <!-- Ajout de la balise label manquante -->

                                                <div class="d-flex flex-wrap p-2 py-1 bg-light rounded-bottom border mt-n1 fs-13">
                                                    <div>
                                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#EditAddressModal"
                                                           onclick="selectAddress({{ $index + 1 }}, {{ $address->id }})">
                                                            <i class="ri-pencil-fill text-muted align-bottom me-1"></i> Modifier
                                                        </a>
                                                    </div>
                                                    <div>
{{--                                                        <a href="#" class="d-block text-body p-1 px-2" data-bs-toggle="modal" data-bs-target="#removeAddressModal"--}}
{{--                                                           data-address-id="{{ $address->id }}" onclick="confirmRemoveAddress({{ $address->id }})">--}}
{{--                                                            <i class="ri-delete-bin-fill text-muted align-bottom me-1"></i> Retirer--}}
{{--                                                        </a>--}}
                                                        <a href="{{ route('removeAddress', ['id' => $address->id]) }}" class="btn btn-soft-danger btn-icon btn-sm">
                                                            <i class="ri-close-line fs-13"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        @endforeach
                    </div>
            </div>


            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="text-center p-4 rounded-3 border border-2 border-dashed">
                        <div class="avatar-md mx-auto mb-4">
                            <div class="avatar-title bg-success-subtle text-success rounded-circle display-6">
                                <i class="bi bi-house-add"></i>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-3">Ajouter Nouvelle Adresse</h5>
                        <button type="button"
                                class="btn btn-success btn-sm w-xs stretched-link addAddress-modal"
                                data-bs-toggle="modal" data-bs-target="#addAddressModal">Ajouter
                        </button>
                    </div>
                </div>
            </div>
            <a href="{{route('products_left') }}" >
            <div class="hstack gap-2 justify-content-start mt-3">
                <button type="button" class="btn btn-hover btn-danger">Continue Shopping</button>
            </div>
            </a>
        </div>
    </section>

    <!-- Modal AddAddress Start -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addAddressModalLabel">Ajouter une Nouvelle Adresse</h1>
                    <button type="button" id="addAddress-close" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createAddress-form" id="createAddress-form" action="{{ route('addAddress') }}" method="POST" novalidate>
                        @csrf  <div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Entrer  nom" required>
                                <div class="invalid-feedback">SVP entrer un nom.</div>
                            </div>
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrer prenom" required>
                                <div class="invalid-feedback">SVP entrer un prenom.</div>
                            </div>

                            <div class="mb-3">
                                <label for="street" class="form-label">Rue</label>
                                <input type="text" class="form-control" id="street" name="street" placeholder="Entrer rue" required>
                                <div class="invalid-feedback">SVP entrer une rue.</div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telephone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer  no." required>
                                <div class="invalid-feedback">SVP entrer un numero.</div>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Entrer ville" required>
                                <div class="invalid-feedback">SVP entrer une ville.</div>
                            </div>

                            <div class="mb-3">
                                <label for="zip_code" class="form-label">Zip_code</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Entrer zip_code" required>
                                <div class="invalid-feedback">SVP entrer un zip_code</div>
                            </div>

                            <div class="mb-3">
                                <label for="country" class="form-label">Pays</label>
                                <select class="form-select" id="country" name="country" required>
                                    <option value="" disabled selected>Choisir un pays</option>
                                    <option value="Afghanistan">Haiti</option>
                                    <option value="Zimbabwe">Republique Dominicaine</option>
                                    <option value="Afghanistan">United States</option>
                                    <option value="Zimbabwe">Canada</option>
                                    <option value="Afghanistan">Cuba</option>
                                    <option value="Zimbabwe">Jamaique</option>
                                </select>
                                <div class="invalid-feedback">SVP choisissez un pays</div>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="addNewAddress" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal AddAddress End -->

{{--    <!-- Modal EditAddress Start -->--}}
    <div class="modal fade" id="EditAddressModal" tabindex="-1" aria-labelledby="EditAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="EditAddressModalLabel">Modifier une Adresse</h1>
                    <button type="button" id="EditAddress-close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createAddress-form" id="editAddressForm" action="{{ route('updateAddress') }}" method="POST" novalidate>
                        @csrf
                        <input type="hidden" id="address_id" name="address_id" value="">
                        <div>
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Entrer  nom" required>
                                <div class="invalid-feedback">SVP entrer un nom.</div>
                            </div>
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrer prenom" required>
                                <div class="invalid-feedback">SVP entrer un prenom.</div>
                            </div>

                            <div class="mb-3">
                                <label for="street" class="form-label">Rue</label>
                                <input type="text" class="form-control" id="street" name="street" placeholder="Entrer rue" required>
                                <div class="invalid-feedback">SVP entrer une rue.</div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Telephone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer  no." required>
                                <div class="invalid-feedback">SVP entrer un numero.</div>
                            </div>

                            <div class="mb-3">
                                <label for="city" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Entrer ville" pattern="[a-zA-Z\s]+" required>
                                <div class="invalid-feedback">SVP entrer une ville.</div>
                            </div>

                            <div class="mb-3">
                                <label for="zip_code" class="form-label">Code postal</label>
                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Entrer code postal" pattern="[0-9]+" required>
                                <div class="invalid-feedback">SVP entrer un code postal.</div>
                            </div>

                            <div class="mb-3">
                                <label for="country" class="form-label">Pays</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Entrer pays" pattern="[a-zA-Z\s]+" required>
                                <div class="invalid-feedback">SVP entrer un pays.</div>
                            </div>

                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="updateAddress" class="btn btn-primary">Modifier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{--    <!-- Modal EditAddress End -->--}}

{{--    <!-- remove address Modal Sart -->--}}
    <div id="removeAddressModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="close-removeAddressModal" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                   colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure You want to remove this address ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="remove-address" class="btn w-sm btn-danger" data-address-id="">Yes, Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
{{--    <!-- remove address Modal End -->--}}

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
                                <button type="submit" class="btn btn-info btn-hover rounded-pill">Subscript Now</button>
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
        <!--end container-->
    </section>

    <section class="position-relative py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xxl-3 col-md-6">
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
                <div class="col-xxl-3 col-md-6">
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
                <div class="col-xxl-3 col-md-6">
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
                <div class="col-xxl-3 col-md-6">
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
    <script src="{{ URL::asset('build/js/frontend/address.init.js') }}"></script>

    <!-- landing-index js -->
    <script src="{{ URL::asset('build/js/frontend/menu.init.js') }}"></script>
@endsection
