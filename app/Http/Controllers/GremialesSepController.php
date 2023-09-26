<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GremialesSepController extends Controller
{

    public function show($tituloSep)
    {
        return view('layouts.gremial.greSep', compact('tituloSep'));
    }
}
