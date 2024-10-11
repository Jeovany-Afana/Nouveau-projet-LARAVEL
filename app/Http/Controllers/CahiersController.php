<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cahier;
use App\Models\Fiche;

class CahiersController extends Controller
{
    //

    public function liste_cahiers()
    {
        return view('Interfaces_Fiches.affiche_fiche');
    }

    public function store(Request $request)
{
    // Créer le cahier de texte avec le responsable de classe associé
    $cahierDeTexte = Cahier::create([
        'responsable_de_classe_id' => $request->input('responsable_de_classe_id'),
        // Ajoute ici d'autres champs si nécessaire
    ]);

    // Créer 20 fiches associées au cahier de texte nouvellement créé
    for ($i = 0; $i < 20; $i++) {
        Fiche::create([
            'cahier_de_texte_id' => $cahierDeTexte->id,
            // Si nécessaire, tu peux attribuer aléatoirement un professeur à chaque fiche
            // 'professeur_id' => rand(1, nombre_de_professeurs) 
        ]);
    }

    return redirect()->route('cahier_de_texte.index')->with('success', 'Cahier de texte créé avec 20 fiches.');
}

}
