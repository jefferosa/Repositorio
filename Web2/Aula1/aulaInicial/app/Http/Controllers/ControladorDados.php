<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorDados extends Controller
{
    public function getDados()
    {
        $nome      = "Irineu"          ;
        $curso     = "ADS"             ;
        $matricula = 20212610          ;
        $email     = "irineu@gmail.com";
        $cidade    = "Ilhota"          ;
    
        $dados = [
            'nome'     =>$nome     ,
            'curso'    =>$curso    ,
            'matricula'=>$matricula,
            'email'    =>$email    ,
            'cidade'   =>$cidade   ,
        ];

        return View('home', $dados);
    }

    public function getForm(Request $request)
    {
        $nome      = $request->query('nome'     );
        $curso     = $request->query('curso'    );
        $matricula = $request->query('matricula');
        $email     = $request->query('email'    );
        $cidade    = $request->query('cidade'   );

        return View('form', [
            'nome'     =>$nome     ,
            'curso'    =>$curso    ,
            'matricula'=>$matricula,
            'email'    =>$email    ,
            'cidade'   =>$cidade   ,
        ]);
    }
}
