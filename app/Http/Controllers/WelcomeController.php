<?php

namespace App\Http\Controllers;

use App\Models\Red;
use App\Models\Video;
use App\Models\Noticia;
use App\Models\Seccion;
use App\Models\Publicidad;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function __invoke(){
        $now = Carbon::now();
        $publicidades = Publicidad::all();
        $noticias = Noticia::orderBy('fecha', 'desc')->limit(16)->get();
        $secciones = Seccion::orderBy('orden', 'desc')->get();
        $redes = Red::orderBy('orden', 'desc')->get();
        $videos = Video::orderBy('orden', 'desc')->limit(4)->get();

        return view('welcome',compact('now','publicidades', 'noticias','secciones','redes','videos'));
    }


}


