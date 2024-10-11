@extends('pages.master')


@section('contenu')

@php
// Récupérer l'utilisateur connecté
$user = Auth::guard('responsables')->user();

// Vérifier si l'utilisateur a une fiche_id
if($user) {
    $fiche = App\Models\Fiche::find($user->fiche_id);
}
@endphp

   @include('Students_Interfaces.StudentContent.studentContent')

   <li>
    <ul style="list-style-type: none">
        <li class="btn btn-primary" style="color: white; font-weight: bold;"><a href="{{URL::to('/logout')}}" style="color: white;">Se déconnecter</a></li>
       
    </ul>
</li>

<form class="form-auth-small" action="{{ route('saveFiche') }}" method="POST">
    <fieldset>
        <legend>Ajouter une fiche</legend>
        @csrf

        <div class="form-group">
            <label for="signin-email" class="control-label sr-only">Intitulé du cours</label>
            <input type="text" class="form-control" name="intitule" id="signin-email" placeholder="Intitulé du cours">
        </div>

        <div class="form-group">
            <label for="coursMagistral" class="control-label sr-only">Cours magistral</label>
            <input type="number" class="form-control" name="coursMagistral" placeholder="Cours magistral">
        </div>
        
        <div class="form-group">
            <label for="traveauxDiriges" class="control-label sr-only">Travaux dirigés</label>
            <input type="number" class="form-control" name="traveauxDiriges" placeholder="Travaux dirigés">
        </div>

        <div class="form-group">
            <label for="devoir" class="control-label sr-only">Devoir</label>
            <input type="date" class="form-control" name="devoir" placeholder="Devoir">
        </div>

        <div class="form-group">
            <label for="examenFinal" class="control-label sr-only">Examen Final</label>
            <input type="date" class="form-control" name="examenFinal" placeholder="Examen Final">
        </div>

        <div class="form-group">
            <label for="enseignant_id" class="control-label sr-only">Enseignant</label>
            <input type="number" class="form-control" name="enseignant_id" placeholder="ID de l'enseignant">
        </div>

        <div class="form-group">
            <label for="cahier_id" class="control-label sr-only">ID du cahier associé</label>
            <input type="number" class="form-control" name="cahier_id" placeholder="ID du cahier associé">
        </div>

        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Ajouter la fiche" style="border: 3px solid #5db5df; background-color: white; color: #5db5df; font-weight:bold;">
    </fieldset>
</form>

@endsection


@section('liste_elements')


   


@endsection


@section('title')
Responsable
    
@endsection

