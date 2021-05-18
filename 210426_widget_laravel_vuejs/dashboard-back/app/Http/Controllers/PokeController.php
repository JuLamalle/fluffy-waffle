<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class PokeController extends Controller
{
    public function getpoke($pokeinput)
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/'. $pokeinput );
        $data = json_decode($response);
        $moves = $data->moves;
        return $moves;
    }
}
