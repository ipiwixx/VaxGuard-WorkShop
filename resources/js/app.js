import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function redirectToLogin() {
    // Redirige vers la page de vaccination de connexion
    window.location.href = '/login'; 
}

window.redirectToLogin = redirectToLogin;


function redirectToVaccine(patientId) {
    // Redirige vers la page de vaccination du patient
    window.location.href = '/vaccine/' + patientId;
}

window.redirectToVaccine = redirectToVaccine;