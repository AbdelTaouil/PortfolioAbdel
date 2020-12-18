@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit</h1>


    <form action="/edit-tag/{{$tag->id}}" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
        @csrf
        <h1 class="titre2 text-dark">Modification le tag</h1>

        <div class="container mt-5">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">tag</label>
                <input type="text" value="{{$tag->tag}}" class="form-control" id="inputCity" name="tag">
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Niveau</label>
                <input type="text" value="{{$tag->niveau}}" class="form-control" id="inputCity" name="niveau">
            </div>
        </div>
    
    <button type="submit" class="btn btn-primary">Modifier</button>

      </form>

      @stop
