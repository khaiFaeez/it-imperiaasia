<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->truncate();
        
        $models = [
            ['status' => 'USED','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['status' => 'FREE','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['status' => 'TEMPORARY','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['status' => 'BROKEN','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['status' => 'TRANSFER','created_at'  => Carbon::now()->format('Y-m-d H:i:s')]      
        ];
     
        DB::table('statuses')->insert($models);
    }
}
