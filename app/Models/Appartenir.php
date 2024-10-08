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
     * Get the user.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    /**
     * Get the patient.
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }
}
