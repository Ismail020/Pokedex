<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function view($pokemon)
    {
        return view('pokemon', [
            'pokemon' => $pokemon
        ]);
    }
}
