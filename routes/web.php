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
Route::get('/registro-broker', [App\Http\Controllers\WebController::class, 'registro_broker'])->name('registro.broker');
Route::get('/registro-inquilino', [App\Http\Controllers\WebController::class, 'registro_inquilino'])->name('registro.inquilino');
Route::get('/registro-propietario', [App\Http\Controllers\WebController::class, 'registro_propietario'])->name('registro.propietario');
Route::get('/invitacion-propietario/{transaccion}', [App\Http\Controllers\WebController::class, 'invitacion_propietario'])->name('invitacion_propietario');
Route::get('/iniciar-sesion', [App\Http\Controllers\WebController::class, 'iniciar_sesion'])->name('iniciar_sesion');


// Arendatario
Route::group(['middleware' => ['role:arendatario']], function () {
    Route::get('/datos-del-propietario/{transaccion}', [App\Http\Controllers\InquilinoController::class, 'datos_propietario'])->name('inquilino.datos_propietario');
    Route::get('/inquilino-datos-personales', [App\Http\Controllers\InquilinoController::class, 'datos_personales'])->name('inquilino.datos_personales');
});

// Propietario
Route::group(['middleware' => ['role:propietario']], function () {
    Route::get('/datos-del-inquilino/{transaccion}', [App\Http\Controllers\PropietarioController::class, 'datos_inquilino'])->name('propietario.datos_inquilino');
    Route::get('/propietario-datos-personales', [App\Http\Controllers\PropietarioController::class, 'datos_personales'])->name('propietario.datos_personales');
});

// Broker
Route::group(['middleware' => ['role:broker']], function () {
    Route::get('/datos-inquilino-propietario/{transaccion}', [App\Http\Controllers\BrokerController::class, 'datos_inquilino_propietario'])->name('broker.datos_propietario_inquilino');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
