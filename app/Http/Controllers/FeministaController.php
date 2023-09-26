<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeministaController extends Controller
{
    public function show($fem)
    {
        return view('layouts.feminista.fem',compact('fem'));
    }
}
