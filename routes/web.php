<?php

use App\Http\Controllers\CulturaController;
use App\Http\Controllers\DHumanosController;
use App\Http\Controllers\EconomiaController;
use App\Http\Controllers\GremialesController;
use App\Http\Controllers\InternacionalesController;
use App\Http\Controllers\PolicialesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PoliticaController;
use App\Http\Controllers\SociedadController;
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
Route::get('sociedad/{sociedad}',[sociedadController::class,'show'])->name('sociedad.show');
Route::get('policial/{policial}',[PolicialesController::class,'show'])->name('policial.show');
Route::get('economia/{economia}',[EconomiaController::class,'show'])->name('economia.show');
Route::get('gremial/{gremial}',[GremialesController::class,'show'])->name('gremial.show');
Route::get('cultura/{cultura}',[CulturaController::class,'show'])->name('cultura.show');
Route::get('internacionales/{inter}',[InternacionalesController::class,'show'])->name('inter.show');
Route::get('derechoshumanos/{der}',[DHumanosController::class,'show'])->name('derechos.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
