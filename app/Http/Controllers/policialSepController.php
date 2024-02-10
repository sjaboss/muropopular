<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class policialSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.policial.poliSep', compact('tituloSep'));
    }
}
