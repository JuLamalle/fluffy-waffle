<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/bonjour/{prenom}', function ($prenom) {
//     return view('/bonjour')->withTest($prenom);
//     // Exemple pour envoyer une variable prenom depuis l'url dans la view sous le nom de $test (a mettre de preference dans le controller et non pas sur la route)
// });


Route::get('/home',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Controllers\AdController::class, 'data'])->name('dashboard');

Route::get('/addarticle',function(){
    return view('addarticle');
});

Route::post('/addarticle', [Controllers\AdController::class, 'add']);
