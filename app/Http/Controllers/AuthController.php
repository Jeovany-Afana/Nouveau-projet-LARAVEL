<?php
namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Fiche;
use App\Models\Membre_Administration;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{

    public function loginStudent()
    {
        return view('Students_Interfaces.login');
    }


    public function saveFiche(Request $request)
{
    $request->validate([
        'intitule' => 'required',
        'coursMagistral' => 'required',
        'traveauxDiriges' => 'required',
        'devoir' => 'required',
        'examenFinal' => 'required',
        'enseignant_id' => 'required',
        'cahier_id' => 'required',
    ]);

    $fiche = new Fiche();
    $fiche->intitule = $request->input('intitule');
    $fiche->coursMagistral = $request->input('coursMagistral');
    $fiche->traveauxDiriges = $request->input('traveauxDiriges');
    $fiche->devoir = $request->input('devoir');
    $fiche->examenFinal = $request->input('examenFinal');
    $fiche->contenu = "";
    $fiche->enseignant_id = $request->input('enseignant_id');
    $fiche->cahier_id = $request->input('cahier_id');

    $fiche->save();

    // Attacher les fiches au cahier
    // $fiche->Cahier()->attach($request->input('fiches'));

    return redirect('/profile_responsable')->with('success', 'Fiche ajoutée avec succès.');
}

    

    public function loginProf()
    {
        return view('Teacher_Interfaces.login');
    }


    public function teacherlogin(Request $request)
    {
        // Validation des données
        $request->validate([
            'email' => ['required','email'],
            'password' => 'required',
        ]);

        // Vérification des informations d'identification
        if (Auth::guard('enseignants')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentification réussie
             $user = Auth::guard('enseignants')->user(); // Récupérer l'utilisateur connecté
             $fiche_id = Auth::guard('enseignants')->user()->fiche_id;

             $fiche = Fiche::findOrFail($fiche_id);

            return redirect()->intended('/profile_prof')->with(['users' =>$user, 'fiche' => $fiche]); // Rediriger vers la page d'accueil ou autre
        }

        // Authentification échouée
        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

    public function studentlogin(Request $request):RedirectResponse
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

            return redirect()->intended('profile_responsable');
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification sont incorrectes.',
        ]);
    
        }

    public function loginAdmin()
    {
        return view('membre_admin.login');
    }

    public function adminlogin(Request $request)
    {    // Validation des données
        // Valide les champs
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Vérification des informations d'identification
        // Tente de connecter l'administrateur
        if (Auth::guard('membre__administrations')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('profile_admin');
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification sont incorrectes.',
        ]);
    }

    public function profile_admin()
    {
        return view('membre_admin.profile');
    }

    public function saveAdmin(Request $request)
        {
            $request->validate([

                'name' =>'required',
                'email' => 'required',
                'password'=> 'required',
                'telephone' => 'required',
               ]);
      
               $admin = new Membre_Administration();
               $admin->name = $request -> input('name');
               $admin->email = $request -> input('email');
               $admin->password = Hash::make($request -> input('password'));
               $admin->phone_number = $request -> input('telephone');
               $admin->save();
      

            return redirect('loginAdmin');
        }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/index'); // Rediriger vers la page de connexion
    }
}
