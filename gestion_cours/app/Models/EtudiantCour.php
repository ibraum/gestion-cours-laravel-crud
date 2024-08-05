<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantCour extends Model
{
    use HasFactory;
    protected $fillable = [
        'cour_id',
        'etudiant_id'
    ];

    public function etudiant()
    {
        return $this->belongsToMany(Cour::class);
    }

    public function cour()
    {
        return $this->belongsToMany(Etudiant::class);
    }
}
