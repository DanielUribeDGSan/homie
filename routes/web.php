<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\WebController::class, 'home'])->name('home');
Route::get('/registro', [App\Http\Controllers\WebController::class, 'registro'])->name('registro');
Route::get('/invitacion-propietario/{transaccion}', [App\Http\Controllers\WebController::class, 'invitacion_propietario'])->name('invitacion_propietario');


// Arendatario
Route::group(['middleware' => ['role:arendatario']], function () {
    Route::get('/datos-del-propietario/{transaccion}', [App\Http\Controllers\ArendatarioController::class, 'datos_propietario'])->name('arendatario.datos_propietario');
    Route::get('/inquilino-datos-personales', [App\Http\Controllers\ArendatarioController::class, 'datos_personales'])->name('arendatario.datos_personales');
});

// Propietario
Route::group(['middleware' => ['role:propietario']], function () {
    Route::get('/datos-del-inquilino', [App\Http\Controllers\PropietarioController::class, 'datos_arendatario'])->name('propietario.datos_arendatario');
    Route::get('/propietario-datos-personales', [App\Http\Controllers\PropietarioController::class, 'datos_personales'])->name('propietario.datos_personales');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
