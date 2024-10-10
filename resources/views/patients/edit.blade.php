@extends('layouts.app')

@section('content')
<div class="container-crud">
    <h1>Modifier le Patient</h1>
    <div class="flex-container">

        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{ $patient->nom }}" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $patient->prenom }}" required>
            </div>

            <div class="form-group">
                <label for="date_naissance">Date de Naissance</label>
                <input type="date" name="date_naissance" id="date_naissance" class="form-control" value="{{ $patient->date_naissance }}" required>
            </div>

            <div class="form-group">
                <label for="numero_secu">Numéro de Sécurité Sociale</label>
                <input type="text" name="numero_secu" id="numero_secu" class="form-control" value="{{ $patient->numero_secu }}">
            </div>

            <button type="submit" class="btn btn-primary">Mettre à Jour</button>
        </form>
    </div>
</div>
@endsection
