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

      <h1>Voici vos projet</h1>

      @foreach ($projects as $item)

      <h4>Nom : {{$item->nom}}</h4>
      <a href="/modifier-image/{{$item->id}}">
        <button class="btn btn-success mx-4">Edit</button>
    </a>
    <form action="/supprimer-image/{{$item->id}}" method="post">
      @csrf
      <button class="btn btn-danger ">Supprimer</button>
  </form>

      @endforeach



@stop
