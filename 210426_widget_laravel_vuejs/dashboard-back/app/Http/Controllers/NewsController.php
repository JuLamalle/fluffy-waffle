<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index($country)
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines?country='. $country . '&apiKey=6bb019c8f8f741e6a4a9550eba650cae');
        return $response;
    }

}
