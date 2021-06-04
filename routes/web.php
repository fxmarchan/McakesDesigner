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

Route::get('/', function () { return view('home');})->name('home');
Route::get('/formato-MCAKESDESIGNER_f7x9m2s9', [App\Http\Controllers\PastelesController::class, 'formato'])->name('formato');
Route::get('/frutas-MCAKESDESIGNER_f7x9m2s9', [App\Http\Controllers\PastelesController::class, 'frutas'])->name('frutas');
Route::get('/insumos-MCAKESDESIGNER_f7x9m2s9', [App\Http\Controllers\PastelesController::class, 'insumos'])->name('insumos');
Route::get('/pasteles-MCAKESDESIGNER_f7x9m2s9', [App\Http\Controllers\PastelesController::class, 'pasteles'])->name('pasteles');
Route::get('/rellenos-MCAKESDESIGNER_f7x9m2s9', [App\Http\Controllers\PastelesController::class, 'rellenos'])->name('rellenos');
Route::post('/MandarIngPastel-MCAKESDESIGNER_f7x9m2s9', [App\Http\Controllers\PastelesController::class, 'store'])->name('FormTanSurt');
Route::post('/informe-MCAKESDESIGNER_f7x9m2s9', [App\Http\Controllers\PastelesController::class, 'informe'])->name('informe');
