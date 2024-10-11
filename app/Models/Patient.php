<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Appartenir;
use App\Models\RendezVous;
use Illuminate\Support\Facades\Auth;

class Patient extends Model
{
    use HasFactory;

    // Définit le nom de la table
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
     * relation 0,N avec appartenir
     */
    public function appartenir(): HasMany
    {
        return $this->hasMany(Appartenir::class);
    }

    /**
     * relation 0,N avec rendez-vous
     * relation 0,N avec rendez-vous
     */
    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
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

    public function getAgeAttribute()
    {
        // Vérifie si la date de naissance est définie
        if (!$this->date_naissance) {
            return 'Date de naissance non spécifiée';
        }

        // Crée un objet DateTime à partir de la date de naissance
        $birthDate = new \DateTime($this->date_naissance);
        $currentDate = new \DateTime(); // Date actuelle

        // Calcule la différence
        $ageInterval = $currentDate->diff($birthDate);

        // Retourne l'âge sous différentes formes
        if ($ageInterval->y > 0) {
            return $ageInterval->y . ' an' . ($ageInterval->y > 1 ? 's' : '');
        } elseif ($ageInterval->m > 0) {
            return $ageInterval->m . ' moi' . ($ageInterval->m > 1 ? 's' : '');
        } else {
            return $ageInterval->d . ' jour' . ($ageInterval->d > 1 ? 's' : '');
        }
    }
}