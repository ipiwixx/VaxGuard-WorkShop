@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Patients</h1>

    <a href="{{ route('patients.create') }}" class="btn btn-primary">Ajouter un Patient</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->nom }}</td>
                    <td>{{ $patient->prenom }}</td>
                    <td>{{ $patient->date_naissance }}</td>
                    <td>
                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
