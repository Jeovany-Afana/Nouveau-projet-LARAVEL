<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule',
        'coursMagistral',
        'traveauxDiriges',
        'devoir',
        'examenFinal',
        'enseignant_id',
        'cahier_id', 
        'professeur_id',
    ];
    // Chaque fiche appartient à un cahier de texte

    public function cahiers()
    {
        return $this->belongsToMany(Cahier::class, 'cahier_fiche', 'fiche_id', 'cahier_id');
    }
    // Chaque fiche est liée à un professeur
    public function professeur()
    {
        return $this->belongsTo(Enseignant::class);
    }

}
