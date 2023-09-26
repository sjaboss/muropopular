<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CulturaController extends Controller
{
    public function show($cultura)
    {
        return view('layouts.cultura.cul',compact('cultura'));
    }
}
