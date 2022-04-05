<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->truncate();
        
        $models = [
            ['name' => 'V310','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'IDEAPAD 100','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'T410','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'T430','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'TRAVELMATE P245','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'TRAVELMATE P246','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ProBook 440 3G','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ProBook 4440s','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ProBook 6450b','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'HP Probook 4340s','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'HP Probook 4430s','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'HP Probook 6450b','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ELITEBOOK 8460','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ELITEBOOK 8470','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E6330','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E6410','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E6420','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E6430','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E5420','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'LATITUDE E4310','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'LATITUDE E5420','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'P05G','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'LIFEBOOK A573/G','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'G50','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E5410','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'A573/G','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'A573/G','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E5430','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ELITEBOOK 8460p','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ASPIRE ES 14','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'T420','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E6520','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'E6530','created_at'  => Carbon::now()->format('Y-m-d H:i:s')]
           
        ];
     
        DB::table('models')->insert($models);
    }
}
