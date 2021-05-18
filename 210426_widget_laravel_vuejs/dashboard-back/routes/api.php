<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\PokeController;
use App\Http\Controllers\MeteoController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\RatioController;
use App\Http\Controllers\NewsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('quotes', QuoteController::class);

Route::get('/poketype/{pokeinput}', [PokeController::class, 'getpoke']);

Route::get('/meteo/{requete}', [MeteoController::class, 'getmeteo']);
// Route::group([], function ($router) {
//   Route::get('currency','App\Http\Controllers\CurrencyController@index');
//   Route::post('currency','App\Http\Controllers\CurrencyController@exchangeCurrency');
// });
// Routes for currencies
Route::get('/currencies', 'App\Http\Controllers\CurrencyController@index');
Route::post('/currencies', 'App\Http\Controllers\CurrencyController@add');
Route::delete('/currencies/{id}', 'App\Http\Controllers\CurrencyController@delete');

//Routes for ratios
Route::post('/ratios', 'App\Http\Controllers\RatioController@get_ratios');
Route::post('/ratios/set', 'App\Http\Controllers\RatioController@set_ratios');

//Routes for news widget
Route::get('/news/{country}', [NewsController::class, 'index']);
