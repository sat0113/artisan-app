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
        \App\Models\User::factory(3)->create();
        \App\Models\Manager::factory(2)->create();
        $this->call([
            CompaniesTableSeeder::class,
            GenbaTableSeeder::class,
            DeduraTableSeeder::class,
        ]);

    }
}
