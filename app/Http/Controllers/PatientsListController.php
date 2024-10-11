<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PatientsListController extends Controller
{
        /**
     * Affiche la liste des patients d'un médecin spécifique.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Récupère l'utilisateur actuellement connecté (supposons que c'est un médecin)
        $medecin = Auth::user();

        // Récupère les patients associés à ce médecin
        $patients = $medecin->patients()->get();
        

        // Passe les données à la vue patients-list.blade.php
        return view('patients-list', compact('patients'));
    }
}
