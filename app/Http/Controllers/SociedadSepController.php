<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SociedadSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.sociedad.socSep',compact('tituloSep'));
    }
}
