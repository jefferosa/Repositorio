<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Zoologico;
use App\Models\Comida;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ZoologicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zoologicos = Zoologico::all();
        $comidas = Comida::all();
        return view('pages.zoologicos', compact('zoologicos', 'comidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zoologico = new Zoologico();

        $zoologico->name = $request->input('name');

        $zoologico->save();

        return redirect('/zoologicos');
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
        $zoologico = Zoologico::find($id);
        return view('pages.edit.zoologico', compact('zoologico'));
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
        $zoologico = Zoologico::find($id);
        if (isset($zoologico)) {
            $zoologico->name = $request->input('name');

            $zoologico->save();
        }
        return redirect('/zoologicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $zoologico = Zoologico::find($id);

        if (isset($zoologico)) {
            try {
                $zoologico->delete();
                return redirect('/zoologicos');
               } catch(QueryException $ex){
                   $errors = 'Não foi possível excluir o zoologico';
                   return redirect()->back()->withErrors($errors);
               }

        }

    }

    public function animais($id){

        $animais = Animal::where('zoologico_id', $id)->get();
        $zoologico = Zoologico::find($id);

        return view('pages.list.animais', compact('animais', 'zoologico'));
    }
}
