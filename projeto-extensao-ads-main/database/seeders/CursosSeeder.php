<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            'name'=>'Análise e Desenvolvimento de Sistemas',
        ]);

        DB::table('cursos')->insert([
            'name'=>'Processos Gerenciais',
        ]);

        DB::table('cursos')->insert([
            'name'=>'Designer de Moda',
        ]);
    }
}
