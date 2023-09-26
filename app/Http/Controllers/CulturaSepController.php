<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulturaSepController extends Controller
{
    public function show($tituloSep){
    return view('layouts.cultura.culSep', compact('tituloSep'));
    }
}
