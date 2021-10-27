<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class meucontrolador extends Controller
{
    public function ola($nome = null)
    {
        return View('ola', ['nome'=>$nome]);
    }

    public function produtos()
    {
        return View('produtos');
    }

    public function getNome()
    {
        return 'Jeff';
    }

    public function getIdade()
    {
        return 23;
    }

    public function getSoma($valor1, $valor2)
    {
        return $valor1 + $valor2;
    }
}
