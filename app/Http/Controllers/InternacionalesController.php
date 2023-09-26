<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternacionalesController extends Controller
{
    public function show($inter)
    {
        return view('layouts.internacionales.int',compact('inter'));
    }
}
