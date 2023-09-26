<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class internacionalesSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.internacionales.intSep',compact('tituloSep'));
    }

}
