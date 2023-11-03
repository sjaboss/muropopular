<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function __invoke(){
        $now = Carbon::now();
      /*   $usuarios = Http::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();

        $pais = 'AR';
        $ciudad = 'Buenos Aires';
        $appId ='cf29c4e898c44aa6f70f8428210f91f6';
        $clima = Http::get('http://api.openweathermap.org/data/2.5/weather?q=${ciudad},${pais}&appid=${appId}');
        $climaArray = $clima->json(); */
       
        return view('welcome',compact('now'));
    } 


}


