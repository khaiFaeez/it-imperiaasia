<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->truncate();
        
        $models = [
            ['name' => 'LAPTOP','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'DESKTOP','created_at'  => Carbon::now()->format('Y-m-d H:i:s')]       
        ];
     
        DB::table('category')->insert($models);
    }
}
