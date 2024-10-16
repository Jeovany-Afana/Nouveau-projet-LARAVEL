@extends('pages.master')

@section('formulaire')

<div class="body">
    <br><br>
    <form action="{{URL::to('/savestudent')}}" method="post">
                           
        @csrf
        <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Entrez votre nom">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Entrez votre adresse mail">
            </div>
        </div>
    </div>
    <div class="row clearfix">

        <div class="col-md-3 col-sm-12">
            <div class="form-group">
                <input type="number" class="form-control"  name="cahier_id" placeholder="Identifiant du cahier">
            </div>
        </div>
       
        <div class="col-md-3 col-sm-12">
            <div class="form-group">
                <select name="departement" id="departement" class="form-control">
                    <option value="0" disabled selected>Département</option>
                    <option value="1">ESITEC</option>
                    <option value="2">MERCURE</option>
                </select>
            </div>
        </div>
      
        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <input type="text" name="telephone" class="form-control" placeholder="Numéro de téléphone">
            </div>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="Mot de passe">
            </div>
        </div>
       
    
        <div class="col-sm-12">
            <input type="submit" value="Enregistrer" class="btn btn-primary">
        </div>
       </div>
    </form>
</div>
    
@endsection