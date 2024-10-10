<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccin;
use Illuminate\Http\Request;

class VaccineUsersController extends Controller
{

    public function show($id)
    {
        // Recherche un patient par son ID qui a rendez_vous.
        $patient = Patient::with('rendez_vous')->findOrFail($id);
        // Récupère tous les patients qui ont rendez-vous.
        $patients = Patient::has('rendez_vous')->get(); 
         //Affiche toute la liste des vaccins pour affichage
        $vaccins = Vaccin::all();

    return view('vaccine-users', compact('patient', 'vaccins', 'patients'));
    }
}
