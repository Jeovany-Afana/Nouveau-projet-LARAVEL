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

   <style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: #0056b3;
            color: white;
            padding: 15px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #e7f1ff;
        }

        tr:nth-child(odd) {
            background-color: #f2f9ff;
        }

        tr:hover {
            background-color: #d0e3ff;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .delete-icon {
            cursor: pointer;
            color: #ff4d4d;
            font-size: 20px;
        }
        
        .delete-icon:hover {
            color: #cc0000;
        }
</style>


   <li>
    <ul style="list-style-type: none">
        <li class="btn btn-primary" style="color: white; font-weight: bold; background-color: red;"><a href="{{URL::to('/logout')}}" style="color: white; ">Se déconnecter</a></li>
        <li class="btn btn-primary" style="color: white; font-weight: bold;"><a href="{{URL::to('/profile_admin')}}" style="color: white;">Retourner au profil</a></li>
        <li class="btn btn-primary" style="color: white; font-weight: bold; background-color: #0056b3;"><a href="{{URL::to('/inscription_responsable')}}" style="color: white;">Ajouter un responsable</a></li>

        
    </ul>
</li>

@php
    // Vérifier si l'utilisateur est authentifié avec la garde 'membre__administrations'
    if(Auth::guard('membre__administrations')->check()){
        // Récupérer tous les responsables
        $responsables = App\Models\Responsable::all();
    } else {
        $responsables = []; // Si non authentifié, initialiser comme un tableau vide
    }
@endphp

<h2>Liste des responsables</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Département</th>
            <th>ID du Cahier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($responsables as $responsable)
        <tr data-id="{{ $responsable->id }}">
            <td>{{$responsable->id}}</td>
            <td>{{$responsable->name}}</td>
            <td>{{$responsable->email}}</td>
            <td>{{$responsable->departement}}</td>
            <td>{{$responsable->cahier_id}}</td>
            <td>
                <form action="{{ route('responsables.destroy', $responsable->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet élément ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Supprimer
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        
       
    </tbody>
</table>

<script>
    function deleteRow(icon) {
        // Obtenir la ligne parent de l'icône de suppression
        var row = icon.parentElement.parentElement;
        // Supprimer la ligne du tableau
        row.parentNode.removeChild(row);
    }
</script>



@endsection


@section('liste_elements')


   


@endsection


@section('title')
Responsable
    
@endsection

