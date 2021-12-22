<?php

namespace App\Http\Controllers;

use App\Models\Alocacao;
use App\Models\Zoologico;
use App\Models\Comida;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ComidaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comidas = Comida::with('zoologicos')->get();
        $zoologicos = Zoologico::all();

        return view('pages.comidas', compact('comidas', 'zoologicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comida = new Comida();

        $comida->name = $request->input('name');
        $comida->nutriente = $request->input('nutriente');

        $comida->save();

        foreach ($request->input('zoologico') as $zoologico) {
            $alocacao = new Alocacao();

            $alocacao->comida_id = $comida->id;

            $alocacao->zoologico_id = $zoologico;

            $alocacao->save();
        }


        return redirect('/comidas');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comida = Comida::find($id);
        $zoologicos = Zoologico::all();
        return view('pages.edit.comida', compact('comida', 'zoologicos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comida = Comida::find($id);

        if (isset($comida)) {
            $comida = new Comida();

            $comida->name = $request->input('name');
            $comida->nutriente = $request->input('nutriente');

            $comida->save();

            foreach ($request->input('zoologico') as $zoologico) {
                $alocacao = new Alocacao();

                $alocacao->comida_id = $comida->id;

                $alocacao->zoologico_id = $zoologico;

                $alocacao->save();
            }
        }


        return redirect('/comidas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comida = Comida::find($id);
        try {
            $comida->delete();
            return redirect('/comidas');
        } catch (QueryException $ex) {
            $errors = 'Não foi possível excluir a comida';
            return redirect()->back()->withErrors($errors);
        }
    }
}
