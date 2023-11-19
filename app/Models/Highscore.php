<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highscore extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'categorie_id',
        'score',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
