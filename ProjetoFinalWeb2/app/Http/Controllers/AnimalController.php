<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Zoologico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animais = Animal::with('zoologico')->get();
        $zoologicos = Zoologico::all();
        // return $animais;
        return view('pages.animais', compact('animais', 'zoologicos'));
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
        $animal = new Animal();

        $animal->codigo = $request->input('codigo');
        $animal->name = $request->input('name');
        $animal->classe = $request->input('classe');
        $animal->uf_nacionalidade = $request->input('uf');
        $animal->data_nascimento = $request->input('dataNascimento');
        $animal->sexo = $request->input('sexo');
        $animal->Raca = $request->input('raca');
        $animal->forma_ingresso = $request->input('ingresso');
        $animal->zoologico_id = $request->input('zoologico');
        $animal->status = $request->input('status');

        $animal->save();

        return redirect('/animais');
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
        $animal = Animal::find($id);
        $zoologicos = Zoologico::all();
        return view('pages.edit.zoologico', compact('animal', 'zoologicos'));
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
        $animal = Animal::find($id);
        if (isset($animal)) {
            $animal->codigo = $request->input('codigo');
            $animal->name = $request->input('name');
            $animal->classe = $request->input('classe');
            $animal->uf_nacionalidade = $request->input('uf');
            $animal->data_nascimento = $request->input('dataNascimento');
            $animal->sexo = $request->input('sexo');
            $animal->Raca = $request->input('raca');
            $animal->forma_ingresso = $request->input('ingresso');
            $animal->zoologico_id = $request->input('zoologico');
            $animal->status = $request->input('status');

            $animal->save();
        }
        return redirect('/animais');
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = Animal::find($id);
        if (isset($animal)) {
            $animal->delete();
        }
        return redirect('/animais');
    }

}
