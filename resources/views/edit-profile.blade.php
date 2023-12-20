<!-- resources/views/edit-profile.blade.php -->

<!-- Affichez les messages de session (succès, erreur, etc.) -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Formulaire de mise à jour du profil -->
<form action="{{ route('update-profile') }}" method="post">
    @csrf

    <label for="first_name">Prénom :</label>
    <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" required>

    <label for="last_name">Nom :</label>
    <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" required>

    <!-- Ajoutez d'autres champs au besoin -->

    <button type="submit">Mettre à jour</button>
</form>

