<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeportesController extends Controller
{
    public function show($dep)
    {
        return view('layouts.deportes.dep',compact('dep'));
    }
}
