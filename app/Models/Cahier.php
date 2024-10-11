<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cahier extends Model
{

    protected $table = 'cahiers';
    // Si ce n'est pas déjà défini
    protected $fillable = ['responsable_de_classe_id'];


    
    public function fiches()
    {
        return $this->belongsToMany(Fiche::class, 'cahier_fiche', 'cahier_id', 'fiche_id');
    }

    // Un cahier de texte est géré par un responsable de classe
    public function responsable()
{
    return $this->belongsTo(Responsable::class);
}

    use HasFactory;
}
