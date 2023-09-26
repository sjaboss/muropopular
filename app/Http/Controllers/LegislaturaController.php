<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegislaturaController extends Controller
{
    public function show($leg)
    {
        return view('layouts.legislatura.leg',compact('leg'));
    }
}
