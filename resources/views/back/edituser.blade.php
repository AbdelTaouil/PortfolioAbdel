@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit</h1>

    <form action="/edit-user/{{$user->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <h1 class="titre2 text-dark">Modification le contenu</h1>

        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Nom</label>
                <input type="text" value="{{$user->nom}}" class="form-control" id="inputCity" name="nom">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Nom</label>
                <input type="text" value="{{$user->prenom}}" class="form-control" id="inputCity" name="prenom">
            </div>
            <div class="form-group col-md-6"> 
                <label for="inputCity">Email</label> 
                <input type="text" value="{{$user->email}}" class="form-control" id="inputCity" name="email"> 
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Metier</label>
                <input type="text" value="{{$user->info->metier}}" class="form-control" id="inputCity" name="metier">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Date de naissance</label>
                <input type="text" value="{{$user->info->date}}" class="form-control" id="inputCity" name="date">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Phone</label>
                <input type="text" value="{{$user->info->phone}}" class="form-control" id="inputCity" name="phone">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Ville</label>
                <input type="text" value="{{$user->info->ville}}" class="form-control" id="inputCity" name="ville">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">Etat</label>
                <input type="text" value="{{$user->info->etat}}" class="form-control" id="inputCity" name="etat">
            </div>


            <div class="form-group mx-5 pt-4">
              <label for="imagee">Votre photo</label>
              <input type="file" value="{{$user->info->src}}" name="src" id="imagee">
            </div>
          </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>

      </form>

      @stop
