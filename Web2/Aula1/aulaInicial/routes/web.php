<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\meucontrolador;
use App\Http\Controllers\ControladorDados;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('ola/{seunome?}'              , [meucontrolador::class, 'ola'          ]);
Route::get('produtos'                    , [meucontrolador::class, 'produtos'     ]);
Route::get('idade'                       , [meucontrolador::class, 'getidade'     ]);
Route::get('nome'                        , [meucontrolador::class, 'getnome'      ]);
Route::get('soma/{valor1}/{valor2}'      , [meucontrolador::class, 'getsoma'      ]);
Route::get('subtrai/{valor1}/{valor2}'   , [meucontrolador::class, 'getsubtrai'   ]);
Route::get('multiplica/{valor1}/{valor2}', [meucontrolador::class, 'getmultiplica']);
Route::get('divide/{valor1}/{valor2}'    , [meucontrolador::class, 'getdivide'    ]);

Route::get('dados', [ControladorDados::class, 'getDados']);
Route::get('form' , [ControladorDados::class, 'getForm' ]);
