<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\WelcomeController;//TODO: ESTO TIENE QUE IR EN MAYUSCULA LA LETRA A
use App\Http\Controllers\PresupuestoController;//TODO: ESTO TIENE QUE IR EN MAYUSCULA LA LETRA A
use App\Http\Controllers\RRHHController;//TODO: ESTO TIENE QUE IR EN MAYUSCULA LA LETRA A

use Illuminate\Support\Facades\Auth;

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
    return Redirect::route('login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
/*     Route::get('/welcome', function () {
        return Inertia::render('Welcome');
    })->name('welcome'); */

    Route::get('/welcome',
    [WelcomeController::class,'index'])->name('welcome');

    Route::get('/dashboard',
    [WelcomeController::class,'dashboard'])->name('dashboard');

    //TODOS LOS METODOS DE LA CLASE DE PRESUPUESTO
    Route::get('/presupuesto',
    [PresupuestoController::class,'index'])->name('presupuesto');
    Route::get('/opcion2',
    [PresupuestoController::class,'opcion2'])->name('opcion2');
    Route::get('/opcion3',
    [PresupuestoController::class,'opcion3'])->name('opcion3');
    Route::get('/opcion4',
    [PresupuestoController::class,'opcion4'])->name('opcion4');
    Route::get('/opcion5',
    [PresupuestoController::class,'opcion5'])->name('opcion5');
   
    
    Route::get('tienda/productos/{id}', function($id_producto){
        return "Mostrando el producto $id_producto de la tienda " . Auth::id();
    });
    
    Route::get('/rrhh',
    [RRHHController::class,'index'])->name('rrhh');
});
