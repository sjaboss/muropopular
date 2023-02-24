<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EconomiaController extends Controller
{
    public function show($economia)
    {
        return view('layouts.economia.eco',compact('economia'));
    }
}
