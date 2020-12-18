<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Info;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  User::all();
        $projet =  Image::all();
        $tag= Tag::all();
        return view('welcome', compact('user',"tag","projet"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user =  User::all();
        return view('back/Profil', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
     
        return view('back/edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $info= Info::find($id);

        $user->nom=$request->nom;
        $user->prenom=$request->prenom;
        $user->email=$request->email;
        $info->metier=$request->metier;
        $info->date=$request->date;
        $info->phone=$request->phone;
        $info->ville=$request->ville;
        $info->etat=$request->etat;
        $info->src=$request->file('src')->hashName();
        $info->save();
        $user->save();

        Storage::disk('public')->delete('img/' . $user->info->src);

        $request->file('src')->storePublicly('img','public');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        //
    }
}
