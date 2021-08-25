<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Genba;
use Carbon\Carbon;

class GenbaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [            
            'company_id' => '1',
            'name' => '〇〇〇〇新築工事',
            'address' => '大阪府北区大淀南2丁目345',
            'startDate' => '2020-03-01',
            'endDate' => '2021-08-31',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        DB::table('genbas')->insert($param);
        
        $param = [
            'company_id' => '1',
            'name' => '△△△△改修工事',
            'address' => '兵庫県尼崎市〇〇5丁目3-56',
            'startDate' => '2021-01-15',
            'endDate' => '2021-07-31',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        DB::table('genbas')->insert($param);
        
        $param = [
            'company_id' => '2',
            'name' => '××××夜間工事',
            'address' => '大阪府天王寺区4丁目2-25',
            'startDate' => '2020-07-25',
            'endDate' => '2022-03-31',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        DB::table('genbas')->insert($param);

    }
}
