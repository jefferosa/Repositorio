<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert(
            [
            'matricula'=>'1254475632456',
            'name' => 'Lucas Rodrigo',
            'email' => "lucas__rodrigo@gmail.com",
            'uf_nacionalidade'=> 'SC',
            "data_nascimento"=>'26/05/1998',
            "sexo"=>'Masculino',
            "raca"=>'Branco',
            "forma_ingresso"=>"Sisu",
            "curso_id"=>1,
            "Status" => "Cursando"
        ]);

        DB::table('alunos')->insert(
            [
            'matricula'=>'1254979625456',
            'name' => 'João Almeilda',
            'email' => "joaoalmeida@gmail.com",
            'uf_nacionalidade'=> 'RJ',
            "data_nascimento"=>'21/10/1996',
            "sexo"=>'Masculino',
            "raca"=>'Pardo',
            "forma_ingresso"=>"Enem",
            "curso_id"=>1,
            "Status" => "Cursando"
        ]);

        DB::table('alunos')->insert(
            [
            'matricula'=>'1254979632456',
            'name' => 'Sabrina Alves',
            'email' => "sabrinaalves@gmail.com",
            'uf_nacionalidade'=> 'SC',
            "data_nascimento"=>'05/05/1999',
            "sexo"=>'Feminino',
            "raca"=>'Parda',
            "forma_ingresso"=>"Sisu",
            "curso_id"=>1,
            "Status" => "Cursando"
        ]);

        // DB::table('alunos')->insert(
        //     [
        //     'matricula'=>'1254979635456',
        //     'name' => 'Amanda Ribeiro',
        //     'email' => "amandinha_ribeiro@gmail.com",
        //     'uf_nacionalidade'=> 'PR',
        //     "data_nascimento"=>'29/06/1997',
        //     "sexo"=>'Feminino',
        //     "raca"=>'Branca',
        //     "forma_ingresso"=>"Sisu",
        //     "curso_id"=>2,
        //     "Status" => "Cursando"
        // ]);

        // DB::table('alunos')->insert(
        //     [
        //     'matricula'=>'1254458735456',
        //     'name' => 'Aline dos Santos',
        //     'email' => "aline_santos@gmail.com",
        //     'uf_nacionalidade'=> 'SC',
        //     "data_nascimento"=>'10/12/1997',
        //     "sexo"=>'Feminino',
        //     "raca"=>'Branca',
        //     "forma_ingresso"=>"Sisu",
        //     "curso_id"=>1,
        //     "Status" => "Cursando"
        // ]);

    }
}
