<?php

use App\Http\Controllers\RegistroControl;
use App\Models\Registro;
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

Route::get('/', [RegistroControl::class, 'index'])->name('registro.index');
Route::get('lista', [RegistroControl::class, 'lista'])->name('registro.lista');
Route::get('agregar', [RegistroControl::class, 'agregar'])->name('registro.agregar');
//metodo pos para capturar los datos
Route::post('registro', [RegistroControl::class, 'store'])->name('registro.store');

Route::get('mostrar/{registro}', [RegistroControl::class, 'mostrar'])->name('registro.mostrar');
Route::get('editar/{registro}/editar', [RegistroControl::class, 'editar'])->name('registro.editar');
Route::put('mostrar/{registro}', [RegistroControl::class, 'update'])->name('registro.update');