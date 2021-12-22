<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CursosSeeder::class);
        $this->call(ProfessoresSeeder::class);
        $this->call(AlocacoesSeeder::class);
        $this->call(AlunosSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
