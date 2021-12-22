<?php

namespace Tests\Feature;

use App\Models\Curso;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculoTest extends TestCase
{

    use RefreshDatabase;

    public function test_contar_cursos(){
        $curso = new Curso(['name'=>'Geografia']);
        $curso->save();

        $cursos = Curso::all();

        $this->assertCount(1, $cursos);
    }
}
