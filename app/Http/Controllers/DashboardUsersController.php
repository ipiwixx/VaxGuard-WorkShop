<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardUsersController extends Controller
{
    public function index()
    {
        //Variable pour afficher les patients ayant rendez-vous
        $patients = Patient::has('rendez_vous')->get(); 
        //Variable pour afficher les patients ayant un rendez-vous vaccin
        $patients = Patient::with('rendez_vous.vaccin')->get();
        //Variable pour afficher les patients affilié à un user (les patients du pédiatre et des parents)
        $patients = Auth::user()->patients;

        return view('dashboard-users', compact('patients'));
    }
}
