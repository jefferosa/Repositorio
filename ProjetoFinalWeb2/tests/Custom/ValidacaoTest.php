<?php

namespace Tests\Feature;

use App\Models\Animal;
use App\Models\Zoologico;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidacaoTest extends TestCase
{
    use RefreshDatabase;

    public function test_validar_campo(){

        $dados = ['id' => 1, 'name'=>'Madagascar'];
        $dados2 = ['id' => '1', 'name'=>'Madagascar'];

        $this->assertNotNull($dados['name']);
        $this->assertNotNull($dados['id']);
        $this->assertEquals(1, $dados['id']);
        $this->assertContainsOnly('string',$dados2);
    }
}
