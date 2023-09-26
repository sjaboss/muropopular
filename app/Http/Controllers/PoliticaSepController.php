<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.politica.polSep', compact('tituloSep'));
    }
}
