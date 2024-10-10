@extends('base')

@section('title', 'Tableau de bord utilisateur - VaxGuard')

@section('content')
<div class="main-container">
@include('components.left-column')
                <div class="center-column">
                    <h2>Bonjour, {{Auth::user()->prenom}} {{ Auth::user()->nom }} ! </h2>
                    <div class="container-dashboard">
   
                            @foreach($patients as $patient)
                                <div class="patient-container">
                                    <div class="patient-infos">
                                        <h2>{{ $patient->prenom }} {{ $patient->nom }}</h2>
                                        <p>{{ $patient->age }} mois</p>

                                        @if($patient->rendez_vous->isNotEmpty())
                                            @foreach($patient->rendez_vous as $rendezVous)
                                                <p class="next-vaccine">Prochain vaccin : {{ $rendezVous->vaccin ? $rendezVous->vaccin->label : 'Vaccin non trouvé' }}</p>
                                                <p class="rdv">Rendez-vous pris le {{ \Carbon\Carbon::parse($rendezVous->date_rdv)->format('d/m/Y') }} à {{ \Carbon\Carbon::parse($rendezVous->date_rdv)->format('H:i') }}</p>
                                            @endforeach
                                        @else
                                            <p>Aucun rendez-vous prévu.</p>
                                        @endif
                                    </div>
                                    <div class="avatar">
                                    <a href="{{ route('vaccine-users.show', $patient->id) }}">
                                        <img src="images/avatar.jpg" alt="Avatar de {{ $patient->prenom }} {{ $patient->nom }}" class="avatar-img">
                                    </a>
                                    </div>
                                </div>
                            @endforeach

                    </div>
                    <div class="news-container">
                    <div class="news-header">
                        <img src="images/virus.png" alt="Virus Icon" class="icon">
                        <h2>Actualité Santé</h2>
                    </div>
                    <div class="news-content">
                        <p>Campagne de vaccination contre la grippe en cours. Consultez les centres de vaccination près de chez vous.</p>
                    </div>
                    <div class="news-footer">
                        <button class="btn">En savoir plus</button>
                    </div>
                </div>
                </div>
                @include('components.right-column-users')
</div>
@endsection