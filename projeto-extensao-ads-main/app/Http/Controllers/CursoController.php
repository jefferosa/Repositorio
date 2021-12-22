<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Professor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        $professores = Professor::all();
        return view('pages.cursos', compact('cursos', 'professores'));
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
        $curso = new Curso();

        $curso->name = $request->input('name');

        $curso->save();

        return redirect('/cursos');
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
        $curso = Curso::find($id);
        return view('pages.edit.curso', compact('curso'));
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
        $curso = Curso::find($id);
        if (isset($curso)) {
            $curso->name = $request->input('name');

            $curso->save();
        }
        return redirect('/cursos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::find($id);

        if (isset($curso)) {
            try {
                $curso->delete();
                return redirect('/cursos');
               } catch(QueryException $ex){
                   $errors = 'Não foi possível excluir o curso';
                   return redirect()->back()->withErrors($errors);
               }

        }

    }

    public function alunos($id){

        $alunos = Aluno::where('curso_id', $id)->get();
        $curso = Curso::find($id);

        return view('pages.list.alunos', compact('alunos', 'curso'));
    }
}
