<?php

use App\Http\Controllers\CulturaController;
use App\Http\Controllers\CulturaSepController;
use App\Http\Controllers\DHumanosController;
use App\Http\Controllers\EconomiaController;
use App\Http\Controllers\FeministaController;
use App\Http\Controllers\GremialesController;
use App\Http\Controllers\InternacionalesController;
use App\Http\Controllers\InternacionalesSepController;
use App\Http\Controllers\PolicialesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PoliticaController;
use App\Http\Controllers\SociedadController;
use App\Http\Controllers\DeportesController;
use App\Http\Controllers\DeportesSepController;
use App\Http\Controllers\derechosHumanosSepController;
use App\Http\Controllers\FeministaSepController;
use App\Http\Controllers\GremialesSepController;
use App\Http\Controllers\InternacinalesNewController;
use App\Http\Controllers\LegislaturaController;
use App\Http\Controllers\legislaturaSepController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PoliticaSepController;
use App\Http\Controllers\SociedadSepController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', WelcomeController::class);
Route::get('politica/{politica}',[PoliticaController::class,'show'])->name('politica.show');
Route::get('politicasep/{tituloSep}',[PoliticaSepController::class,'show'])->name('politicaSep.show');

Route::get('sociedad/{sociedad}',[sociedadController::class,'show'])->name('sociedad.show');
Route::get('sociedadsep/{sociedad}',[SociedadSepController::class,'show'])->name('sociedadSep.show');

Route::get('policial/{policial}',[PolicialesController::class,'show'])->name('policial.show');
Route::get('economia/{economia}',[EconomiaController::class,'show'])->name('economia.show');

Route::get('gremial/{gremial}',[GremialesController::class,'show'])->name('gremial.show');
Route::get('gremialSep/{tituloSep}',[GremialesSepController::class,'show'])->name('gremialSep.show');

Route::get('cultura/{cultura}',[CulturaController::class,'show'])->name('cultura.show');
Route::get('culturaSep/{tituloSep}',[CulturaSepController::class,'show'])->name('culturaSep.show');

Route::get('internacionales/{inter}',[InternacionalesController::class,'show'])->name('inter.show');
Route::get('internacionalesSep/{tituloSep}',[InternacionalesSepController::class,'show'])->name('interSep.show');
Route::get('internacionalesSepNew/{tituloSep}',[InternacinalesNewController::class,'show'])->name('interSepNew.show');

Route::get('derechoshumanos/{der}',[DHumanosController::class,'show'])->name('derechos.show');
Route::get('derechoshumanossep/{tituloSep}',[derechosHumanosSepController::class,'show'])->name('derechoSep.show');

Route::get('feminista/{fem}',[FeministaController::class,'show'])->name('feminista.show');
Route::get('feministasep/{tituloSep}',[FeministaSepController::class,'show'])->name('feministaSep.show');

Route::get('deportes/{dep}',[DeportesController::class,'show'])->name('deportes.show');
Route::get('tituloSep/{tituloSep}',[DeportesSepController::class,'show'])->name('deportesSep.show');

Route::get('legislatuta/{leg}',[LegislaturaController::class,'show'])->name('legislatura.show');
Route::get('legislatutasep/{tituloSep}',[legislaturaSepController::class,'show'])->name('legislaturaSep.show');

Route::post('/', [NosotrosController::class, 'store'])->name("nuestros.store"); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
