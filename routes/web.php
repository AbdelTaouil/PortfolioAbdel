<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ContactController;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [InfoController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/profil', function() {
    return view('back/Profil');
})->middleware('auth');

Route::get('/skill', function() {
    return view('back/skill');
})->middleware('auth');



// Projet

Route::post('/new-projet', [ImageController::class, 'store'])->middleware('auth');

Route::get('/search', [ImageController::class, 'search'])->middleware('auth');

Route::get('/image', [ImageController::class, 'create'])->middleware('auth');

Route::get('/modifier-image/{id}', [ImageController::class, 'edit'])->middleware('auth');

Route::post('/edit-image/{id}', [ImageController::class, 'update'])->middleware('auth');

Route::post('/supprimer-image/{id}', [ImageController::class, 'destroy']);


// Skill

Route::post('/new-skill', [TagController::class, 'store'])->middleware('auth');

Route::get('/skill', [TagController::class, 'index'])->middleware('auth');

Route::get('/modifier-tag/{id}', [TagController::class, 'edit'])->middleware('auth');

Route::post('/edit-tag/{id}', [TagController::class, 'update'])->middleware('auth');

Route::post('/supprimer-tag/{id}', [TagController::class, 'destroy']);


//Profil

Route::get('/profil', [InfoController::class, 'create'])->middleware('auth');

Route::get('/modifier-user/{id}', [InfoController::class, 'edit'])->middleware('auth');

Route::post('/edit-user/{id}', [InfoController::class, 'update'])->middleware('auth');

Route::get('/register', function() {
    return view('register');
});


// contact

Route::post('/contact', [ContactController::class, 'store']);