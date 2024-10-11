<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Responsable;
use App\Models\Fiche;
use App\Models\Cahier;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

        return view('index'); // La vue pour les utilisateurs authentifiés
}


public function updateContenu(Request $request)
{
    // Validation du champ spécifique
    $request->validate([
        'fiche_id' => ['required', 'exists:fiches,id'], // Vérifiez que l'ID existe dans la table 'fiches'
        'contenu' => ['required'], // Validation du champ 'contenu'
    ]);

    // Récupérer l'enregistrement à partir de l'ID
    $fiche = Fiche::findOrFail($request->input('fiche_id'));

    // Obtenir la date et l'heure actuelles
    $currentDateTime = now()->format('d-m-Y H:i:s');

    // Ajouter le nouveau contenu à la suite de l'ancien, précédé de la date et heure
    $fiche->contenu = $fiche->contenu . "\n\n" . "Ajouté le : " . $currentDateTime . "\n" . $request->input('contenu');

    // Sauvegarder les modifications
    $fiche->save();

    // Rediriger ou retourner une réponse
    return redirect('/profile_prof')->with('success', 'Contenu ajouté avec succès.');
}



public function ajoutFiche()
{
  return view('/Students_Interfaces.ajoutFiche');
}

public function login(Request $request)
{
     // Validation des données
// Valide les champs
$credentials = $request->validate([
    'email' => ['required', 'email'],
    'password' => ['required'],
]);

// Vérification des informations d'identification
// Tente de connecter l'administrateur
if (Auth::guard('responsables')->attempt($credentials)) {
    $request->session()->regenerate();

    return redirect()->intended('index');
}

return back()->withErrors([
    'email' => 'Les informations d\'identification sont incorrectes.',
]);

}


public function ajouterFichesAuCahier(Request $request)
{
    $request->validate([
        'cahier_id' => 'required|exists:cahiers,id',
        'fiches' => 'required|array', // Tableau d'identifiants de fiches
        'fiches.*' => 'exists:fiches,id' // Chaque identifiant doit exister dans la table fiches
    ]);

    $cahier = Cahier::findOrFail($request->input('cahier_id'));

    // Ajouter les fiches au cahier
    $cahier->fiches()->attach($request->input('fiches'));

    return redirect()->back()->with('success', 'Fiches ajoutées au cahier avec succès.');
}



/**
*

 * @return void
 */
    public function inscription_responsable()
    {
      return view('Students_Interfaces.inscription_responsable');
    }

/**
 * @return void
 */
    public function liste_responsables()
    {
      return view('membre_admin.liste_responsables');
    }


    public function liste_cahiers()
    {
      return view('membre_admin.liste_cahiers');
    }

    public function liste_enseignants()
    {
      return view('membre_admin.liste_enseignants');
    }



    public function inscription_prof()
    {
      return view('Teacher_Interfaces.inscription_prof');
    }

   

    public function liste_prof()
    {
      return view('Admin.liste_prof');
    }

    public function profile_responsable()
    {
      return view('Students_Interfaces.profile_responsable');
    }

    public function profile_prof()
    {
      return view('Teacher_Interfaces.profile_prof');
    }

    public function affiche_fiche()
      {
        return view('Interfaces_Fiches.affiche_fiche');
      }


      // public function __construct()
      // {
      //     // Applique le middleware auth à toutes les méthodes sauf celles listées
      //     $this->middleware('auth')->except(['login', 'inscription_responsable', 'inscription_prof']);
      // }
      



    public function savestudent(Request $request)
      {
        $request->validate([

          'name' =>'required',
          'email' => 'required',
          'password'=> 'required',
          'telephone' => 'required',
          'departement' => 'required',
          'cahier_id' => 'required',
         ]);

        $responsable = new Responsable();
        $responsable->name = $request -> input('name');
        $responsable->email = $request -> input('email');
        $responsable->password = Hash::make($request->input('password'));
        $responsable->telephone = $request -> input('telephone');
        $responsable->departement = $request -> input('departement');
        $responsable->cahier_id = $request -> input('cahier_id');

        $responsable ->save();

        return redirect('/loginStudent');

        
      }


    public function saveteacher(Request $request)
    {
         $request->validate([

          'name' =>'required',
          'email' => 'required',
          'password'=> 'required',
          'telephone' => 'required',
          'adresse' => 'required',
         ]);

         $enseignant = new Enseignant();
         $enseignant->name = $request -> input('name');
         $enseignant->email = $request -> input('email');
         $enseignant->password = Hash::make($request -> input('password'));
         $enseignant->telephone = $request -> input('telephone');
         $enseignant->adresse = $request -> input('adresse');
         $enseignant->fiche_id = 1;
         
         $enseignant->save();

         return redirect('/loginProf');
    }

    public function inscription_admin()
    {return view('membre_admin.inscription');}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyTeacher($id)
    {
       // Récupérer le responsable à supprimer
       $enseignant = Enseignant::findOrFail($id);
       
       // Supprimer le responsable
       $enseignant->delete();
   
       // Rediriger vers la liste des responsables avec un message de succès
       return redirect()->route('liste_enseignants')->with('success', 'Enseignant supprimé avec succès.');
   
    }

    public function destroyCahier($id)
    {
      // Récupérer le responsable à supprimer
      $cahier = Cahier::findOrFail($id);
       
      // Supprimer le responsable
      $cahier->delete();
  
      // Rediriger vers la liste des responsables avec un message de succès
      return redirect()->route('liste_cahiers')->with('success', 'Cahier supprimé avec succès.');
  
    }
   // ResponsableController.php
   public function destroy($id)
   {
       // Récupérer le responsable à supprimer
       $responsable = Responsable::findOrFail($id);
       
       // Supprimer le responsable
       $responsable->delete();
   
       // Rediriger vers la liste des responsables avec un message de succès
       return redirect()->route('liste_responsables')->with('success', 'Responsable supprimé avec succès.');
   }
   

}
