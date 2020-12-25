<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function search()
    {

        $search_text = $_GET['query'];

        $projects = Image::where('nom','LIKE','%'. $search_text .'%')->get();

        return view('back.search', compact('projects'));

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $tag =  Tag::all();
        $img =  Image::all();
        return view('back/editimage', compact('tag','img','image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag =  Tag::all();
        $img =  Image::all();
        Image::simplePaginate(2);
        $counter = 1;
        return view('back/Image', compact('tag','img','counter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=new Image;

        $image->nom=$request->nom;
        $image->src=$request->file('src')->hashName();
        $image->tag_id=$request->tag_id;
        $image->save();
        $request->file('src')->storePublicly('img','public');

        return redirect()->back();
    }

    /** 
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $image= Image::find($id);
        $tag =  Tag::all();
        $img =  Image::all();
        return view('back/editimage', compact('tag','img','image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image= Image::find($id);

        $image->nom=$request->nom;
        $image->src=$request->file('src')->hashName();
        $image->tag_id=$request->tag_id;
 

        $image->save();

        Storage::disk('public')->delete('img/' . $image->src);

        $request->file('src')->storePublicly('img','public');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $imga = Image::find($id);
        Storage::disk('public')->delete('img/' . $imga->src);
        $imga->delete();


        return redirect()->back();
    }
}
