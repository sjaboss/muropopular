<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternacinalesNewController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.internacionales.intSepNew', compact('tituloSep'));
    }
}
