<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\TypeProfil;
use App\Models\RendezVous;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'email',
        'telephone',
        'numero_secu',
        'password',
        'numero_rps',
        'adresse',
        'ville',
        'code_postal',
        'type_profil_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function type_profil(): BelongsTo
    {
        return $this->belongsTo(TypeProfil::class, 'id_vaccin');
    }

    /**
     * Get the rendez-vous.
     */
    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }

    /**
     * Get the appartenir.
     */
    public function appartenir(): HasMany
    {
        return $this->hasMany(Appartenir::class);
    }
}
