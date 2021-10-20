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
    return "Hello World!";
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/boasvindas', function () {
    return View('ola');
});

Route::get('ola2/{nome}', function ($nome) {
    echo "Salve ".$nome.", seja bem vindo!";
});

Route::get('soma/{a}/{b}', function ($a, $b) {
    echo "A soma de ".$a." + " .$b. " = ".$a + $b;
});

Route::get('opcional/{nome?}', function ($nome = null) {
    if (isset ($nome))
        echo "Olá $nome, seja bem vindo";
    else
        echo "usuário não informou parâmetroo";
});
