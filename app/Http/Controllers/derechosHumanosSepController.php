<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class derechosHumanosSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.derechoshumanos.derSep', compact('tituloSep'));
    }
}
