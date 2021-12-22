<?php

namespace Tests\Feature;

use App\Models\Zoologico;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculoTest extends TestCase
{

    use RefreshDatabase;

    public function test_contar_zoologicos(){
        $zoologico = new Zoologico(['name'=>'Madagascar']);
        $zoologico->save();

        $zoologicos = Zoologico::all();

        $this->assertCount(1, $zoologicos);
    }
}
