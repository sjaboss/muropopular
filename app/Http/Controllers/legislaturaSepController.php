<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class legislaturaSepController extends Controller
{
    public function show($tituloSep)
    {
        return view('layouts.legislatura.legSep', compact('tituloSep'));
    }
}
