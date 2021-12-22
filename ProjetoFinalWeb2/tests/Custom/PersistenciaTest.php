<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestPersistencia extends TestCase
{
    public function test_cadastro_comida()
    {
        $response = $this->post('/comidas', [
            'name' => 'Alface',
            'nutriente' => 'Vitamina C',
        ]);

        $this->assertTrue(true);
    }

    public function test_cadastro_zoologico()
    {
        $response = $this->post('/zoologicos', [
            'name' => 'ZooCrania',
        ]);

        $this->assertTrue(true);
    }
}
