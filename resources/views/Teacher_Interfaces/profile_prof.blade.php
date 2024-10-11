@extends('pages.master')

@section('contenu')
@php
// Récupérer l'utilisateur connecté
$user = Auth::guard('enseignants')->user();

// Vérifier si l'utilisateur a une fiche_id
if($user) {
    $fiche = App\Models\Fiche::find($user->fiche_id);
}
@endphp

   @include('Teacher_Interfaces.teacherContent')

   
   <li>
       <ul style="list-style-type: none">
           <li class="btn btn-primary" style="color: white; font-weight: bold;"><a href="{{URL::to('/logout')}}" style="color: white;">Se déconnecter</a></li>
          
       </ul>
   </li>

   <form action="{{ route('updateContenu') }}" method="POST">
       @csrf
       <input type="number" name="fiche_id" placeholder="ID du cahier"> <!-- Champs caché pour l'ID -->
       
       <div class="form-group">
           <label for="contenu">Intitulé du cours</label>
           <textarea type="text" class="form-control" name="contenu" id="contenu" required></textarea>
       </div>
       
       <button type="submit" class="btn btn-primary">Mettre à jour le contenu</button>
   </form>

<br>
 

<div>
   
<p style="font-size: 1rem; font-weight: bold;">Contenu de la fiche :<br> <pre> {{ $fiche ? $fiche->contenu : 'Aucune fiche disponible' }} </pre></p>
</fieldset>
</div>
   

@endsection

@section('liste_elements')
@endsection

@section('title')
Professeur
@endsection
