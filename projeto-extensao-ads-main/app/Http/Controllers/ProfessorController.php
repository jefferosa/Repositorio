<?php

namespace App\Http\Controllers;

use App\Models\Alocacao;
use App\Models\Curso;
use App\Models\Professor;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProfessorController extends Controller
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
        $professores = Professor::with('cursos')->get();
        $cursos = Curso::all();

        return view('pages.professores', compact('professores', 'cursos'));
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
        $professor = new Professor();

        $professor->name = $request->input('name');
        $professor->email = $request->input('email');

        $professor->save();

        foreach ($request->input('curso') as $curso) {
            $alocacao = new Alocacao();

            $alocacao->professor_id = $professor->id;

            $alocacao->curso_id = $curso;

            $alocacao->save();
        }


        return redirect('/professores');
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
        $professor = Professor::find($id);
        $cursos = Curso::all();
        return view('pages.edit.professor', compact('professor', 'cursos'));
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
        $professor = Professor::find($id);

        if (isset($professor)) {
            $professor = new Professor();

            $professor->name = $request->input('name');
            $professor->email = $request->input('email');

            $professor->save();

            foreach ($request->input('curso') as $curso) {
                $alocacao = new Alocacao();

                $alocacao->professor_id = $professor->id;

                $alocacao->curso_id = $curso;

                $alocacao->save();
            }
        }


        return redirect('/professores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = Professor::find($id);
        try {
            $professor->delete();
            return redirect('/professores');
        } catch (QueryException $ex) {
            $errors = 'Não foi possível excluir o curso';
            return redirect()->back()->withErrors($errors);
        }
    }
}
