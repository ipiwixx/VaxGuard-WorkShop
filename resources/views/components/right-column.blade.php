<!--Component de la lise des rendez vous se situant à droite du dashboard pediatre -->
<div class="right-column">
    <div class="dropdown-patients">
        <h2>Vos prochains rendez-vous</h2>

        <!-- Boucle pour parcourir la liste des patients -->
        @foreach($patients as $patient)
        <!-- Vérification pour voir si le pediatre a des rendez-vous -->
            @if($patient->rendez_vous->isNotEmpty()) 
                <div class="patient-card" onclick="redirectToVaccine('{{ $patient->id }}')">
                    <!--Extraction de la première lettre du prénom et du nom du patient pour affichage des initiales -->
                    <div class="patient-initials">{{ substr($patient->prenom, 0, 1) }}{{ substr($patient->nom, 0, 1) }}</div>
                    <div class="patient-info">
                        <h3>{{ $patient->prenom }} {{ $patient->nom }}</h3>
                        <p class="rendezvous">
                            <strong>Prochain rendez-vous:</strong> {{ $patient->rendez_vous->first()->date_rdv }}
                        </p>
                        <p class="age">{{ $patient->age }} </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>