<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GremialesController extends Controller
{
    public function show($gremial)
    {
        return view('layouts.gremial.gre',compact('gremial'));
    }
}
