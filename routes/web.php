<?php

use App\Http\Controllers\EstablecimientoController;
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
    return view('inicio');
});

Route::prefix('establecimientos')->group(function(){
    Route::get('/',[EstablecimientoController::class, 'index'])->name('establecimientos.index');
});