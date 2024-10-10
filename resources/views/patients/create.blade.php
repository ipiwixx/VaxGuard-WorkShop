@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Patient</h1>

    <form action="{{ route('patients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" name="date_naissance" id="date_naissance" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="numero_secu">Numéro de Sécurité Sociale</label>
            <input type="text" name="numero_secu" id="numero_secu" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
