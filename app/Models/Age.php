<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Vaccin;

class Age extends Model
{
    use HasFactory;

    protected $table = 'age';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'mois',
        'vaccin_id',
    ];

    // Get vaccin
    public function vaccin(): BelongsTo
    {
        return $this->belongsTo(Vaccin::class, 'id_vaccin');
    }
}
