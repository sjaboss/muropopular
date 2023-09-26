<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeministaSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.feminista.femSep', compact('tituloSep'));
    }
}
