<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manager;
class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Manager::factory(2)->create();

    }
}
