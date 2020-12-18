@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-5 text-dark">Votre profil</h1>

<div class="container">
        <div class="row">
            @foreach ($user as $item)
            <div class="col-lg-4">
              <img src="{{asset('img/' . $item->info->src)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <h3>Web Developer.</h3>
              <p class="font-italic">
                Toute vos informations sont ci-dessus.
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Nom :</strong> {{$item->nom}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Prenom :</strong> {{$item->prenom}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Date de naissance :</strong> {{$item->info->date}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Numeros :</strong> {{$item->info->phone}}</li>
                    
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Ville :</strong> {{$item->info->ville}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Email :</strong> {{$item->email}}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Freelance :</strong> {{$item->info->etat}}</li>
                  </ul>
                </div>
              </div>

              <a href="/modifier-user/{{$item->id}}">
                <button class="btn btn-success mx-4">Edit</button>
            </a>
              @endforeach
            </div>
          </div>
        </div>



@stop
