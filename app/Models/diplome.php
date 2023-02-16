<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diplome extends Model
{
    use HasFactory;

    protected $fillable = [
        'institut',
        'description',
        'titre_diplome',
        'annee'
        ];
}
