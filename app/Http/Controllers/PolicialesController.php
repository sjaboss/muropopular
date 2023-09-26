<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicialesController extends Controller
{
  public function show($policial)
    {
        return view('layouts.policial.pol',compact('policial'));
    }
}
