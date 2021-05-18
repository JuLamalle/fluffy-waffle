<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class MeteoController extends Controller
{
    public function getmeteo($requete)
    {
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather?q='. $requete . '&units=metric&APPID=0129ee49cedb77e90a1323848236df98&lang=fr');
        return $response;
    }

}
