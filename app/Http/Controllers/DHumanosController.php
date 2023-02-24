<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DHumanosController extends Controller
{
    public function show($der)
    {
        return view('layouts.derechoshumanos.der',compact('der'));
    }
}
