<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelCour',
        'description',
        'professeur',
        'heures',
        'credit'
    ];
    public function etudiants(){
        return $this->belongsToMany(Etudiant::class);
    }
}
