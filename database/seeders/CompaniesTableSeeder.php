<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Company;
use Carbon\Carbon;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '株式会社LOOP',
            'address' => '大阪府中央区〇〇12-23-45',
            'dayOfMonth' => '20',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

        ];
        DB::table('companies')->insert($param);
        
        $param = [
            'name' => '株式会社マイスターズ・ユニオン',
            'address' => '大阪府北区〇〇56-78',
            'dayOfMonth' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        
        ];
        DB::table('companies')->insert($param);

    }
}
