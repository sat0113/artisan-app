<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Dedura;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DeduraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $param = [
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        // ];
        // $target = '2021-05-01';
        // for($i=0;$i<10;$i++) {
        //     DB::table('deduras')->insert([
        //         'date' => date('Y-m-d', strtotime($i . ' day', strtotime($target))),
        //     ]);
        // }
        // \App\Models\Dedura::factory(50)->create(['user_id' => 1]);
        // \App\Models\Dedura::factory(50)->create(['user_id' => 2]);
        \App\Models\Dedura::factory(50)->create(['user_id' => 3]);
    }
}
