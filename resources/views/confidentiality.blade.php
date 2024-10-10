@extends('base')

@section('title', 'Page d\'Accueil - VaxGuard')

@section('content')

<div class="confidentiality-container">
<h1>Politique de Confidentialité</h1>
    <p>Chez VAXGUARD, la protection de vos données personnelles est au cœur de nos priorités. Conformément au Règlement Général sur la Protection des Données (RGPD) (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016, ainsi qu’à la Loi Informatique et Libertés du 6 janvier 1978 modifiée, nous nous engageons à garantir un haut niveau de sécurité et de confidentialité des données que nous collectons, utilisons et traitons dans le cadre de nos services. Cette politique de confidentialité a pour objectif de vous informer, de manière transparente, sur la manière dont vos données sont collectées, traitées, stockées et protégées.</p>

    <h2>1. Responsable du traitement</h2>
    <p>Le responsable du traitement des données, au sens de l’article 4 du RGPD, est [Nom de l’entité], dont le siège social est situé à [Adresse complète]. Le responsable du traitement est chargé de déterminer les finalités et les moyens du traitement des données personnelles collectées par l’application VAXGUARD.</p>

    <h2>2. Données collectées</h2>
    <p>Dans le cadre de l'utilisation de VAXGUARD, nous sommes amenés à collecter plusieurs types de données personnelles, qui sont nécessaires pour garantir le bon fonctionnement de nos services. Ces données incluent :</p>
    <ul>
        <li><strong>Données des utilisateurs (pédiatres et parents)</strong> : Informations d'identification (nom, prénom, adresse email, numéro de téléphone), informations professionnelles (numéro RPPS, adresse postale professionnelle, ville), données de connexion (identifiant, mot de passe crypté, adresse IP), coordonnées de paiement (le cas échéant).</li>
        <li><strong>Données des patients (enfants)</strong> : Informations de santé (nom, prénom, date de naissance, numéro de sécurité sociale), données médicales (vaccins administrés, dates des vaccinations, rappels prévus, antécédents médicaux).</li>
    </ul>

    <h2>3. Finalité du traitement des données</h2>
    <p>Les données collectées sont traitées pour les finalités suivantes :</p>
    <ul>
        <li>Gestion des comptes utilisateurs (création et gestion des comptes).</li>
        <li>Suivi des vaccinations (gestion du calendrier vaccinal, envoi de rappels).</li>
        <li>Notifications de rappel (envoi de rappels avant les dates des rappels de vaccins).</li>
        <li>Suivi des rendez-vous médicaux.</li>
        <li>Statistiques médicales avec des données anonymisées.</li>
    </ul>

    <h2>4. Base légale du traitement</h2>
    <p>Le traitement de vos données repose sur plusieurs bases légales :</p>
    <ul>
        <li><strong>Consentement</strong> : pour certaines fonctionnalités (suivi médical des enfants, rappels).</li>
        <li><strong>Exécution d’un contrat</strong> : nécessaire pour la fourniture des services.</li>
        <li><strong>Obligation légale</strong> : la conservation des données médicales est requise par la loi.</li>
        <li><strong>Intérêt légitime</strong> : pour améliorer et sécuriser les services.</li>
    </ul>

    <h2>5. Durée de conservation des données</h2>
    <p>Les données sont conservées pendant la durée nécessaire à la réalisation des finalités pour lesquelles elles sont traitées :</p>
    <ul>
        <li><strong>Données des utilisateurs</strong> : conservées pendant toute la durée d’utilisation du service, puis supprimées après 12 mois d’inactivité.</li>
        <li><strong>Données médicales des enfants</strong> : conservées pendant 20 ans après la majorité de l’enfant.</li>
        <li><strong>Données de connexion</strong> : conservées pendant 12 mois.</li>
    </ul>

    <h2>6. Sécurité des données</h2>
    <p>Nous appliquons des mesures strictes pour garantir la confidentialité et la sécurité des données :</p>
    <ul>
        <li>Chiffrement des données sensibles (AES-256, SSL/TLS).</li>
        <li>Authentification multi-facteurs pour les pédiatres.</li>
        <li>Hébergement sécurisé dans des centres de données certifiés ISO/IEC 27001.</li>
        <li>Audits de sécurité réguliers.</li>
    </ul>

    <h2>7. Partage et transfert des données</h2>
    <p>Les données personnelles ne sont partagées qu’avec :</p>
    <ul>
        <li><strong>Sous-traitants</strong> : pour certaines opérations techniques (hébergement, maintenance), sous des contrats conformes au RGPD.</li>
        <li><strong>Autorités publiques</strong> : en cas d’obligations légales.</li>
        <li><strong>Transfert hors de l’UE</strong> : nous utilisons des garanties appropriées pour tout transfert en dehors de l’UE.</li>
    </ul>

    <h2>8. Vos droits en tant qu’utilisateur</h2>
    <p>Conformément aux articles 15 à 22 du RGPD, vous disposez de plusieurs droits :</p>
    <ul>
        <li>Droit d’accès</li>
        <li>Droit de rectification</li>
        <li>Droit à l’effacement</li>
        <li>Droit à la portabilité</li>
        <li>Droit à la limitation du traitement</li>
        <li>Droit d’opposition</li>
    </ul>
    <p>Pour exercer vos droits, contactez-nous à : [Email de contact].</p>

    <h2>9. Modifications de la politique de confidentialité</h2>
    <p>Nous nous réservons le droit de modifier cette politique à tout moment. Toute modification substantielle sera notifiée via l'application ou par email.</p>
</div>
    @endsection