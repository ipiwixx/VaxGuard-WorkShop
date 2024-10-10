@extends('base')

@section('title', 'Page d\'Accueil - VaxGuard')

@section('content')
<div class="page-accueil">
    <div class="home-splash">
        <div class="description">
            <h2>
                VaxGuard – Votre partenaire pour la santé de votre enfant. 
</h2>
            <button class="btnLogin" onclick="redirectToLogin()">Connexion</button>
        </div>
        <img src="{{ asset('images/vaccin.jpg') }}" alt="Image d'accueil" class="home-image">
    </div>

    <h2>Nos partenaires</h2>
    <div class="partners">
        <div class="partners-logos">
            <img src="{{ asset('images/MSS.webp') }}" alt="Partenaire 1" class="partner-logo">
            <img src="{{ asset('images/ASN.jpg') }}" alt="Partenaire 2" class="partner-logo">
            <img src="{{ asset('images/ars-logo 1ARS.png') }}" alt="Partenaire 3" class="partner-logo">
            <img src="{{ asset('images/AM.png') }}" alt="Partenaire 4" class="partner-logo">
            <img src="{{ asset('images/HAS.png') }}" alt="Partenaire 5" class="partner-logo">
        </div>
    </div>

    <h2>Ils en parlent</h2>
    <div class="view">
        <div class="view-info">
            <div class="view-users">
                <div class="view-img">
                    <img src="{{ asset('images/image 1commentaire.png') }}" alt="Commentaire" class="view-image">
                </div>
                <div class="view-info-users">
                    <strong>Edward</strong>
                    <p>Père de Nathan 6 mois</p>
                </div>
            </div>
            <div class="view-comment">
                <p>Avec VaxGuard, plus besoin de penser au carnet de santé et de le chercher pendant des heures.</p>
            </div>
        </div>
    </div>
</div>
@endsection