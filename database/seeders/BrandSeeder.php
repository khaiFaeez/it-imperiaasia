<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->truncate();
        
        $models = [
            ['name' => 'LENOVO','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ACER','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'DELL','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'HP','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'FUJITSU','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'ASUS','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'APPLE','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'CHUWII','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
           
        ];
     
        DB::table('brands')->insert($models);
        
    }
}
