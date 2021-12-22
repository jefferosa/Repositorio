<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
            'id'=>1,
            'name'=>'Luis Alberto',
            'email'=>'luisalberto@hotmail.com',
        ]);

        DB::table('professores')->insert([
            'id'=>2,
            'name'=>'Fernanda Almeida',
            'email'=>'fernanda_almeida@hotmail.com',
        ]);

        DB::table('professores')->insert([
            'id'=>3,
            'name'=>'Alberto Antunes',
            'email'=>'professoralbeerto@hotmail.com',
        ]);

        DB::table('professores')->insert([
            'id'=>4,
            'name'=>'Ana Luiza',
            'email'=>'analuizaprof@hotmail.com',
        ]);
    }
}
