@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

    <h1 class="m-0 text-dark">Edit</h1>


    <form action="/edit-image/{{$image->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <h1 class="titre2 text-dark">Modification du image</h1>

        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Nom</label>
                <input type="text" value="{{$image->nom}}" class="form-control" id="inputCity" name="nom">
              </div>
           

            
            <div class="form-group mx-3">
              <label for="inputState">Choisissez votre equipe </label>
              <select id="inputState" class="form-control" name="tag_id">
                <option selected active>Choix equipe</option>
                  @foreach ($tag as $item)
                    <option value="{{$item->id}}">{{$item->tag}}</option>
                  @endforeach
              </select>
            </div>



            <div class="form-group mx-5 pt-4">
              <label for="imagee">Votre image</label>
              <input type="file" value="{{$image->src}}" name="src" id="imagee">
            </div>
          </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>

      </form>

      @stop
