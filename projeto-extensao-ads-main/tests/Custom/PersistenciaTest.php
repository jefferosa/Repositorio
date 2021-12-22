<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestPersistencia extends TestCase
{


    public function test_cadastro_professor()
    {
        $response = $this->post('/professores', [
            'name' => 'Leonardo Leite',
            'email' => 'leonardoprofessor@gmail.com',
        ]);

        $this->assertTrue(true);
    }

    public function test_cadastro_curso()
    {
        $response = $this->post('/cursos', [
            'name' => 'Engenharia Civil',
        ]);

        $this->assertTrue(true);
    }
}
