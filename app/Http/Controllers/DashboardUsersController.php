<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardUsersController extends Controller
{
    public function index()
    {



        $patients = Patient::has('rendez_vous')->get(); 
            

        return view('dashboard-users', compact('patients'));
    }
}
