<div class="right-column">
    <div class="dropdown-patients">
        <h2>Vos prochains rendez-vous</h2>
        @foreach($patients as $patient)
            @if($patient->rendez_vous->isNotEmpty()) <!-- Vérifie s'il y a des rendez-vous -->
                <div class="patient-card" onclick="redirectToVaccine('{{ $patient->id }}')">
                    <div class="patient-initials">{{ substr($patient->prenom, 0, 1) }}{{ substr($patient->nom, 0, 1) }}</div>
                    <div class="patient-info">
                        <h2>{{ $patient->prenom }} {{ $patient->nom }}</h2>
                        <p class="rendezvous">
                            <strong>Prochain Rendez-vous:</strong> {{ $patient->rendez_vous->first()->date_rdv }}
                        </p>
                        <p class="age">{{ $patient->age }} mois</p>
                        <p class="time">{{ $patient->appointment_time }}</p>
                    </div>
                    <div class="details" id="{{ $patient->id }}">
                        <h3>Dernier Vaccin</h3>
                        <p>{{ $patient->last_vaccine }}</p>
                        <h3>Observation</h3>
                        <p>{{ $patient->observations }}</p>
                        <h3>Prescription</h3>
                        <p>{{ $patient->prescription }}</p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>