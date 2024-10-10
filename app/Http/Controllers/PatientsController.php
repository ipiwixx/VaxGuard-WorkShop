<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    // Afficher la liste des patients
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    // Afficher le formulaire de création d'un patient
    public function create()
    {
        return view('patients.create');
    }

    // Enregistrer un nouveau patient
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'numero_secu' => 'nullable|string|max:15',
        ]);

        Patient::create($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient créé avec succès.');
    }

    // Afficher le formulaire d'édition d'un patient
    public function edit(Patient $patient)
    {
        $patients = Patient::all();

        return view('patients.edit', compact('patient','patients'));
    }

    // Mettre à jour un patient
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'numero_secu' => 'nullable|string|max:15',
        ]);

        $patient->update($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient mis à jour avec succès.');
    }

    // Supprimer un patient
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with('success', 'Patient supprimé avec succès.');
    }
}
