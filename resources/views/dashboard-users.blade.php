@extends('base')

@section('title', 'Tableau de bord pediatre - VaxGuard')

@section('content')
<div class="main-container">
@include('components.left-column')


                <div class="center-column">
                    <h2>Bonjour, Dr {{ Auth::user()->nom }} ! </h2>
                    <div class="container-dashboard">
                        <div class="top-container-dashboard">
                            <div class="visits">
                                <h3>Visites du jour:</h3>
                                <p class="visit-count">25</p>
                            </div>
                            <img src="{{ asset('images/Stetoscopepage web.png') }}" alt="Stéthoscope" class="Stethoscope" />
                        </div>
                        <div class="analyze-dashboard">
                            <div class="new-patients">
                                <p>Nouveaux patients</p>
                                <div class="patient-info">
                                    <p class="patient-count">40</p>
                                    <p class="percentage green">51% <span class="arrow-up">↑</span></p>
                                </div>
                            </div>
                            <div class="old-patients">
                                <p>Ancien patients</p>
                                <div class="patient-info">
                                    <p class="patient-count">110</p>
                                    <p class="percentage red">20% <span class="arrow-down">↓</span></p>
                                </div>
                            </div>
                        </div>
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
                @include('components.right-column')
</div>
@endsection