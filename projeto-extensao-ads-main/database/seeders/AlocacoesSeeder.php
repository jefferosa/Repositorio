<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlocacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alocacoes')->insert([
            'professor_id'=>1,
            'curso_id'=>1,
        ]);

        DB::table('alocacoes')->insert([
            'professor_id'=>2,
            'curso_id'=>1,
        ]);

        DB::table('alocacoes')->insert([
            'professor_id'=>3,
            'curso_id'=>1,
        ]);

        DB::table('alocacoes')->insert([
            'professor_id'=>3,
            'curso_id'=>2,
        ]);

        DB::table('alocacoes')->insert([
            'professor_id'=>4,
            'curso_id'=>3,
        ]);
    }
}
