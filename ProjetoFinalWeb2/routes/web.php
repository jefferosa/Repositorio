<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ZoologicoController;
use App\Http\Controllers\ComidaController;
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

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('/animais', AnimalController::class);

Route::get('/zoologicos/{zoologico}/animais', [ZoologicoController::class, 'animais']);
Route::resource('/zoologicos', ZoologicoController::class);
Route::resource('/comidas', ComidaController::class);

require __DIR__ . '/auth.php';
