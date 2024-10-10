<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Age;
use App\Models\RendezVous;

class Vaccin extends Model
{
    use HasFactory;
    
    // Définit le nom de la table
    protected $table = 'vaccin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'label',
    ];

    /**
     * relation 0,N avec age
     */
    public function ages(): HasMany
    {
        return $this->hasMany(Age::class);
    }

    /**
     * relation 0,N avec rendez_vous
     */
    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }
}