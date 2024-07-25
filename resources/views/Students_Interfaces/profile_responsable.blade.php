@extends('pages.master')


@section('contenu')
   @include('Students_Interfaces.StudentContent.studentContent')
@endsection


@section('liste_elements')

<li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i><span>Etudiant</span> </a>
    <ul>
        <li><a href="{{URL::to('/inscription_responsable')}}">Visiter le Cahier de Texte</a></li>
        <li><a href="{{URL::to('/liste_responsables_classe')}}">Voir la liste des Enseignants</a></li>
        <li><a href="{{URL::to('/affiche_fiche')}}">Voir la liste des fiches</a></li>

    </ul>
</li>

@endsection


@section('title')
Responsable
    
@endsection

