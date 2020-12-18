@extends('adminlte::page')

@section('title', 'AdminLTE')



@section('content_header')
<h1 class="m-0 text-dark m-5">Mes tags</h1>

<form action="/new-skill" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
    @csrf
<h1 class="m-3">Crée ton tag</h1>
    <div class="container mt-5">
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputCity">Tag</label>
            <input type="text" value="{{old('tag')}}" class="form-control" id="inputCity" name="tag">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Niveau de maitrise</label>
            <input type="text" value="{{old('niveau')}}" class="form-control" id="inputCity" name="niveau">
        </div>
               
      </div>
</div>

<button type="submit" class="btn btn-primary">Rajouter</button>

  </form>
 
    <table class="table container">
        <thead class="m-5">
          <tr>
            <th scope="col">#</th>
            <th scope="col">tag</th>
            <th scope="col">Niveau</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($tag as $item)
        <tr>
          <th scope="row">{{$counter}}</th>
          <td>{{$item->tag}}</td>
          <td>{{$item->niveau}}</td>
          <td>
          <div class="row">
        <a href="/modifier-tag/{{$item->id}}">
            
            <button class="btn btn-success "><i class="fas fa-edit"></i></button>
        </a>
        <form action="//supprimer-tag/{{$item->id}}" method="post">
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
