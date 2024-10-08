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

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'label',
    ];

    protected $table = 'vaccin';

    /**
     * Get the ages.
     */
    public function ages(): HasMany
    {
        return $this->hasMany(Age::class);
    }

    /**
     * Get the rendez-vous.
     */
    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }
}
