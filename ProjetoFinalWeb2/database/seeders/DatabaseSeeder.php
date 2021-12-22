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
        $this->call(ZoologicosSeeder::class);
        $this->call(ComidasSeeder::class);
        $this->call(AlocacoesSeeder::class);
        $this->call(AnimaisSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
