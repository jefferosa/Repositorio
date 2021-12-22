<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class EstruturalTest extends TestCase
{

    use RefreshDatabase;

    public function test_estrutural_autenticado(){
        $response = $this->get('/alunos');

        $response->assertStatus(302);

    }

    public function test_estrutural_acesso(){
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);;

        $user->save();

        $response = $this->post('/login', [
            'email' => 'admin@admin.com',
            'password' => 'admin',
        ]);

        $this->assertAuthenticated();
        $page_access = $this->get('/alunos');
        $page_access->assertStatus(200);


    }
}
