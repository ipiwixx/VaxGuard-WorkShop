<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;

class TypeProfil extends Model
{
    use HasFactory;

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
     * Get the users.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

}
