<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animais')->insert
        (
            [
            'codigo'=>'125',
            'name' => 'Leão',
            'classe' => "Mamífero",
            'uf_nacionalidade'=> 'AM',
            "data_nascimento"=>'26/05/2005',
            "sexo"=>'Macho',
            "raca"=>'Leão-Negro',
            "forma_ingresso"=>"Capturado na selva",
            "zoologico_id"=>1,
            "Status" => "Saudável"
            ]
        );

        DB::table('animais')->insert
        (
            [
            'codigo'=>'126',
            'name' => 'Foca',
            'classe' => "Mammalia",
            'uf_nacionalidade'=> 'AF',
            "data_nascimento"=>'15/01/2001',
            "sexo"=>'Macho',
            "raca"=>'Phoca vitulina vitulina',
            "forma_ingresso"=>"Transferida da africa",
            "zoologico_id"=>1,
            "Status" => "Saudável"
            ]
        );
    }
}
