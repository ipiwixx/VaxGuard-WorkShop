<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;

class TypeProfil extends Model
{
    use HasFactory;

    // Définit le nom de la table
    protected $table = 'type_profil';

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
     * relation 0,N avec user
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

}