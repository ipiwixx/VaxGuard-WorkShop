<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Patient;
use App\Models\Vaccin;

class RendezVous extends Model
{
    use HasFactory;

    // Définit le nom de la table
    protected $table = 'rendez_vous';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'date_rdv',
        'user_id',
        'vaccin_id',
        'patient_id',
    ];

    /**
     * relation 1,1 avec user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    /**
     * relation 1,1 avec vaccin
     */
    public function vaccin(): BelongsTo
    {
        return $this->belongsTo(Vaccin::class, 'id_vaccin');
    }

    /**
     * relation 1,1 avec patient
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }
}