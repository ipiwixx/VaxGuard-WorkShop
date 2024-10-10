<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardDoctorController extends Controller
{
         // Méthode pour afficher la vue d'accueil
         public function index()
        {
            //Variable pour afficher les patients ayant rendez-vous
            $patients = Patient::has('rendez_vous')->get();                 

            return view('dashboard-doctor', compact('patients'));
        }
}

