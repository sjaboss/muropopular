<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EconomiaSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.economia.ecoSep', compact('tituloSep'));
    }
}
