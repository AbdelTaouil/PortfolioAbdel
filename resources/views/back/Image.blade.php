@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Projet</h1>

    <form action="/search" method="get">

      <div class="input-group input-group-sm hidden-xs pb-4" style="width: 150px;">
        <input type="search" name="query" style="height: 38px" class="form-control  pull-right" placeholder="Search">

        <div class="input-group-btn">
          <button type="submit" class="btn btn-default"><i style="font-size: 13px" class="fa fa-search"></i></button>
        </div>
      </div>

  </form>

    <form action="/new-projet" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
      
        @csrf

        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Nom</label>
                <input type="text" value="{{old('nom')}}" class="form-control" id="inputCity" name="nom">
              </div>
            
            <div class="form-group mx-3">
              <label for="inputState">Quel programme ?</label>
              <select id="inputState" class="form-control" value="{{old('tag_id')}}" name="tag_id">
                <option selected active>Programme</option>
                  @foreach ($tag as $item)
                    <option value="{{$item->id}}">{{$item->tag}}</option>
                  @endforeach
              </select>
            </div>

            <div class="form-group mx-5 pt-4">
              <label for="src">Votre photo du porjet </label>
              <input type="file" name="src" id="src">
            </div>
          </div>
    </div>
    
    <button type="submit" class="btn btn-primary">S'inscrire</button>

      </form>

      <h1 class="m-4">Voici vos projet</h1>
      <table class="table container">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Programme</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($img as $item)
        <tr>
          <th scope="row">{{$counter++}}</th>
          <td>{{$item->nom}}</td>
          <td>{{$item->tag->tag}}</td>
          <td>
          <div class="row">
            
        <a href="/modifier-image/{{$item->id}}">
            <button class="btn btn-success "><i class="fas fa-edit"></i></button>
        </a>

       <form action="/supprimer-image/{{$item->id}}" method="post">
         @csrf
         <button class="btn btn-danger "><i class="far fa-trash-alt"></i></button>
       </form>
     
        </div>
      </td>
        </tr>
      
      </tbody>
          @endforeach

      </table>

@stop
