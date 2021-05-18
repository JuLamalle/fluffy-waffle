<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use \App\Http\Request\PostRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class AdController extends Controller
{
    public function data() {
        $data=Ad::all();
        return view('dashboard', [
            'ads' => $data
        ]);
    }

    public function add() {


        $add = Ad::create([
            'title'=>request('title'),
            'category'=>request('category'),
            'description'=>request('description'),
            'picture'=>request('picture'),
            'price'=>request('price'),
            'location'=>request('location'),
            'author'=>auth()->id(),
        ]);

        $data=Ad::all();
        return view('dashboard', [
            'ads' => $data
        ]);
    }
}
