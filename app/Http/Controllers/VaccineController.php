<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Vaccin;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function show($id)
    {


        $patient = Patient::with('rendez_vous')->findOrFail($id);


        $patients = Patient::has('rendez_vous')->get(); 


        $vaccins = Vaccin::all();

        return view('vaccine', compact('patient', 'vaccins', 'patients'));
    }
}
