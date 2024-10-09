<header class="header">
    <div class="logos">
        <img src="{{ asset('images/vaxguard-icon.png') }}" alt="VaxGuard Icon" class="vaxguard-icon">
        <img src="{{ asset('images/Logo_long.png') }}" alt="Logo" class="logo">
    </div>
    <div class="navbar">
        <a href="{{ url('/') }}" class="nav-link">Accueil</a>
        <a href="{{ url('/about') }}" class="nav-link">À propos</a>
        <a href="{{ url('/register') }}" class="nav-link">Inscription</a>
        @if(Auth::check()) <!-- Vérifie si l'utilisateur est authentifié -->
        @if(Auth::user()->id == 1) <!-- Vérifie si l'utilisateur est un pédiatre -->
            <a href="{{ url('/dashboard-doctor') }}" class="nav-link">Tableau de bord</a>
        @elseif(Auth::user()->id == 2) <!-- Vérifie si l'utilisateur est un patient -->
            <a href="{{ url('/dashboard-patient') }}" class="nav-link">Tableau de bord</a>
        @endif
    @endif
    </div>
</header>