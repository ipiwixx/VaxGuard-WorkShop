<div class="left-column">
                    <div class="top-aside">
                        @if(Auth::check()) <!-- Vérifie si l'utilisateur est authentifié -->
                            @if(Auth::user()->type_profil_id == 1) <!-- Vérifie si l'utilisateur est un pédiatre -->
                                <a href="{{ url('/dashboard-doctor') }}" class="nav-link">Tableau de bord</a>
                            @elseif(Auth::user()->type_profil_id == 2) <!-- Vérifie si l'utilisateur est un patient -->
                                <a href="{{ url('/dashboard-users') }}" class="nav-link">Tableau de bord</a>
                            @endif
                        @endif
                        <a href="{{ url('/patientslist') }}" class="nav-aside">Liste des patients</a>
                        <a href="{{ url('/documents') }}" class="nav-aside">Documents</a>
                        <a href="{{ url('/contact') }}" class="nav-aside">Messages</a>
                    </div>
                    <div class="bottom-aside">
                        @if(Auth::check()) <!-- Vérifie si l'utilisateur est authentifié -->
                            @if(Auth::user()->type_profil_id == 1) <!-- Vérifie si l'utilisateur est un pédiatre -->
                                <a href="{{ url('/register') }}" class="nav-link-add">Ajouter un nouvel utilisateur</a>
                            @elseif(Auth::user()->type_profil_id == 2) <!-- Vérifie si l'utilisateur est un patient -->
                                <a href="{{ url('/patients/{id}') }}" class="nav-link">Profil enfant</a>
                            @endif
                        @endif
                        <a href="{{ url('/settings') }}" class="nav-aside">Paramètres</a>
                        <a href="{{ url('/profile') }}" class="nav-aside">Profil</a>
                    </div>
                </div>

                <div class="separator"></div> 