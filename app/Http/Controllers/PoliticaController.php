<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticaController extends Controller
{
    public function show($politica)
    {
        return view('layouts.politica.pol',compact('politica'));
    }
}
