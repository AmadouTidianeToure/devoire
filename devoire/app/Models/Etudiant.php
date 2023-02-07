<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudant extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "Prenom",
        "Nom",
        "Matiere",
        "Note1",
        "Exament",
        "Semestre"
    ];
}
