<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeportesSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.deportes.depSep',compact('tituloSep'));
        
    }
}
