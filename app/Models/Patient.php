<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Appartenir;
use App\Models\RendezVous;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Patient extends Model
{
    use HasFactory;

    // Définit le nom de la table
    protected $table = 'patient';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'numero_secu',
        'date_naissance',
        'genre'
    ];

    /**
     * relation 0,N avec appartenir
     */
    public function appartenir(): HasMany
    {
        return $this->hasMany(Appartenir::class);
    }

    /**
     * relation 0,N avec rendez-vous
     */
    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->date_naissance)->age; // Utilisation de Carbon pour obtenir l'âge
    }

    /**
     * getPatientsAvecVaccinsByPediatre
     * récupère les patients d'un pédiatre spécifique, filtrant uniquement ceux qui ont des rendez-vous et incluant les informations sur les vaccins liés à ces rendez-vous
     *
     * @param int $idPediatre
     * @return array
     */
    public static function getPatientsAvecVaccinsByPediatre(int $idPediatre) {
        // Récupère les patients du pediatre
        $pediatres = Patient::whereHas('rendez_vous')->with('rendez_vous.vaccin')->where('user_id', $idPediatre)->get();

        // Retourne les patients
        return $pediatres;
    }

    /**
     * getPatientsByPediatre
     * retourne tous les patients d'un pédiatre passé en paramètre
     *
     * @param int $idPediatre
     * @return array
     */
    public static function getPatientsByPediatre(int $idPediatre) {
        // Récupère tous les patients du pédiatre
        $patients = Patient::join('appartenir', 'patient.id', '=', 'appartenir.patient_id')->where('user_id', $idPediatre)->get();

        // Retourne les patients
        return $patients;
    }

    /**
     * getPatientsAvecRdv
     * récupère les patients d'un pédiatre spécifique qui ont des rendez-vous
     *
     * @param int $idPediatre
     * @return array
     */
    public static function getPatientsAvecRdv(int $idPediatre) {
        // Récupère les patients du pediatre qui ont un rendez-vous
        $patients = Patient::whereHas('rendez_vous')->where('user_id',$idPediatre)->get();

        // Retourne les patients
        return $patients;
    }
}
