<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Appartenir;
use App\Models\RendezVous;

class Patient extends Model
{
    use HasFactory;

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
    ];

    /**
     * Get the user.
     */
    public function appartenir(): HasMany
    {
        return $this->hasMany(Appartenir::class);
    }

    /**
     * Get the rendez_vous.
     */
    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }
}
