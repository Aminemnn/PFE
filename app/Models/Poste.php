<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_user',
        'title',
        'nb_heure',
        'Price',
        'role_user',
        'currency',
        'description',
        'image',
        'name_user',
        'categorie',
        'sous_categorie'
    ];
}
