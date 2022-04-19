<?php

use App\Http\Controllers\ContactosController;
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

Route::get('/', [ContactosController::class, 'index'])->name('contactos.index');
Route::post('/store', [ContactosController::class, 'store'])->name('contactos.store');
Route::get('/edit/{id}', [ContactosController::class, 'edit'])->name('contactos.edit');
Route::put('/update/{id}', [ContactosController::class, 'update'])->name('contactos.update');
Route::get('/show/{id}', [ContactosController::class, 'show'])->name('contactos.show');
Route::get('/destroy/{id}', [ContactosController::class, 'destroy'])->name('contactos.destroy');