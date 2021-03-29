<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProyectsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', HomeController::class)->name('index');

Route::get('/nosotros', [AboutController::class, 'about'])->name('nosotros');

Route::get('/servicios', [ServicesController::class, 'services'])->name('servicios');

Route::get('/proyectos', [ProyectsController::class,'proyects'])->name('proyectos');

Route::get('/contactanos', [ContactController::class,'contact'])->name('contactanos');

