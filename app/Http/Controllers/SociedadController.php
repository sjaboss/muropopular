<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SociedadController extends Controller
{
    public function show($sociedad)
    {
        return view('layouts.sociedad.soc',compact('sociedad'));
    }
}
