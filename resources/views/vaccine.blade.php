@extends('base')

@section('title', 'Carnet de Vaccination - ' . $patient->prenom . ' ' . $patient->nom)

@section('content')
<div class="main-container">
    @include('components.left-column')
    <div class="center-column">
        <div class="vaccine-container">
            <h2>Carnet de Vaccination pour {{ $patient->prenom }} {{ $patient->nom }}</h2>
            <div class="infos-patients">
                <h3>Détails du Patient</h3>
                <p>Nom : {{ $patient->prenom }} {{ $patient->nom }}</p>
                <p>Âge : {{ $patient->age }} mois</p>
            </div>
            
            <div class="array-vaccine">
                <h3>Vaccins Obligatoires</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Nom du Vaccin</th>
                            <th>Date injection</th>
                            <th>Observations</th>
                            <th>Signature</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vaccins as $vaccin)
                            <tr>
                                <td>{{ $vaccin->label }}</td>
                                <td><!-- Logique date administrée --></td>
                                <td><!-- Logique observations --></td>
                                <td><!-- Logique signature --></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     @include('components.right-column')
</div>
@endsection
