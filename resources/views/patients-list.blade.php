@extends('base')

@section('title', 'Tableau de bord pediatre - VaxGuard')

@section('content')
<div class="main-container">
    @include('components.left-column')
    <div class="container-list">
        <h1>Liste des patients</h1>

        @if($patients->isEmpty())
        <p>Aucun patient trouvé pour ce médecin.</p>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Numéro de sécurité sociale</th>
                    <th>Âge</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->nom }}</td>
                    <td>{{ $patient->prenom }}</td>
                    <td>{{ $patient->date_naissance }}</td>
                    <td>{{ $patient->numero_secu }}</td>
                    <td>{{ $patient->age }}</td> 
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    @include('components.right-column')
</div>
@endsection