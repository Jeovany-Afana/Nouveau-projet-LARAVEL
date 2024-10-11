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

   @include('membre_admin.adminContent')

   <li>
    <ul style="list-style-type: none">
        <li class="btn btn-primary" style="color: white; font-weight: bold;"><a href="{{URL::to('/logout')}}" style="color: white;">Se déconnecter</a></li>
        <li class="btn btn-primary" style="color: white; font-weight: bold;"><a href="{{URL::to('/liste_cahiers')}}" style="color: white;">Liste des Cahiers</a></li>
        <li class="btn btn-primary" style="color: white; font-weight: bold;"><a href="{{URL::to('/liste_enseignants')}}" style="color: white;">Liste des Enseignants</a></li>
        <li class="btn btn-primary" style="color: white; font-weight: bold;"><a href="{{URL::to('/liste_responsables')}}" style="color: white;">Liste des Responsables</a></li>
        
    </ul>
</li>



@endsection


@section('liste_elements')


   


@endsection


@section('title')
Responsable
    
@endsection

