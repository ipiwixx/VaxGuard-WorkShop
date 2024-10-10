<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appartenir extends Model
{
    use HasFactory;

    // Définit le nom de la table
    protected $table = 'appartenir';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
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
     * relation 1,1 avec patient
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }
}
