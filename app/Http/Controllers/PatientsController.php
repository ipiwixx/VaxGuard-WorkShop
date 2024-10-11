<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
{
     // Afficher la liste des patients d'un médecin (par exemple, le pédiatre connecté)
     public function index()
     {

         $patients = auth()->user()->patients; 
         return view('patients.index', compact('patients'));
     }
 
     // Afficher le formulaire de création d'un nouveau patient
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
 
         // On enregistre le patient lié au pédiatre connecté
         Patient::create([
             'nom' => $request->nom,
             'prenom' => $request->prenom,
             'date_naissance' => $request->date_naissance,
             'numero_secu' => $request->numero_secu,
             'user_id' => auth()->user()->id, // On lie le patient au pédiatre connecté
         ]);
 
         return redirect()->route('patients.index')->with('success', 'Patient créé avec succès.');
     }
    // Afficher les détails d'un patient spécifique
    public function show(Patient $patients)
    {

         $parents = Auth::user();

         $patients = $parents->patients()->get();

        return view('patients.index', compact('patients'));
    }
     // Afficher le formulaire d'édition d'un patient
     public function edit(Patient $patient)
     {
       // Inutile de chercher à nouveau le patient car il est déjà injecté dans la méthode
        $user = $patient->user; // Récupère l'utilisateur (pédiatre) associé au patient

        // Vérifier que le patient appartient bien au pédiatre connecté
        if ($patient->user_id !== auth()->user()->id) {
            return redirect()->route('patients.index')->withErrors('Vous n\'êtes pas autorisé à modifier ce patient.');
        }

        return view('patients.edit', compact('patient'));
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
 
         // On met à jour les informations du patient
         $patient->update($request->all());
 
         return redirect()->route('patients.index')->with('success', 'Patient mis à jour avec succès.');
     }
 
     // Supprimer un patient
     public function destroy(Patient $patient)
     {
         // On s'assure que seul le pédiatre propriétaire du patient puisse le supprimer
         if ($patient->user_id !== auth()->user()->id) {
             return redirect()->route('patients.index')->withErrors('Vous n\'êtes pas autorisé à supprimer ce patient.');
         }
 
         $patient->delete();
         return redirect()->route('patients.index')->with('success', 'Patient supprimé avec succès.');
     }
}
