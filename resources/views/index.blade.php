@extends('pages.master');


@section('liste_elements')

<li><a href="javascript:void(0);" class="has-arrow"><i class="fa  fa-user-circle"></i><span>Proffesseurs</span> </a>
    <ul>
        <li><a href="{{url('inscription_prof')}}">Ajouter un Proffesseur</a></li>
        <li><a href="{{url('liste_prof')}}">Liste des proffesseurs</a></li>
        <li><a href="noticeboard.html">Notes des proffesseurs</a></li>
    </ul>
</li>
<li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i><span>Students</span> </a>
    <ul>
        <li><a href="{{url('inscription_responsable')}}">Ajouter un Responsable</a></li>
        <li><a href="{{url('liste_responsables_classe')}}">Liste des responsables</a></li>
    </ul>
</li>
<li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-user"></i><span>Parents</span> </a>
    <ul>
        <li><a href="parents-add.html">Add Parents</a></li>
        <li><a href="parents-list.html">Parents List</a></li>
    </ul>
</li>
    
@endsection
@section('title')
    Home
@endsection

@section('contenu')
    
<style>
    .accueil {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(to right, #40bffa, #4b8af7);
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        text-align: center;
        overflow: hidden;
    }

    h1 {
        font-size: 3em;
        margin: 0;
        animation: fadeIn 1.5s ease-in;
    }

    .paragraphe {
        font-size: 1.2em;
        margin: 20px 0;
        animation: fadeIn 2s ease-in;
    }

    .buttonIndex {
        background-color: #ff5722;
        border: none;
        padding: 15px 30px;
        font-size: 1.2em;
        color: #fff;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        animation: fadeIn 2.5s ease-in;
    }

    .buttonIndex:hover {
        background-color: #e64a19;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

   
</style>

<div class="accueil">
<h1>Bienvenue sur notre Application</h1>
    <p class="paragraphe">Découvrez une nouvelle manière de gérer le cahier de texte <br>Vous êtes : </p>

    @if (Auth::check())
       
    @else
    <button class="buttonIndex" onclick="location.href='loginProf'">Un proffesseurs</button><br>
    <button class="buttonIndex" onclick="location.href='loginStudent'">Un responsable de classe</button><br>
    <button class="buttonIndex" onclick="location.href='loginAdmin'">Un membre de l'aministration</button>
    @endif
   
</div>
    @endsection

