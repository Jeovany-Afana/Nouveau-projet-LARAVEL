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

