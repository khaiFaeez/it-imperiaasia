<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OwnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ownerships')->truncate();
        
        $models = [
            ['ownership' => 'OWN','created_at'  => Carbon::now()->format('Y-m-d H:i:s')],
            ['ownership' => 'RENTAL','created_at'  => Carbon::now()->format('Y-m-d H:i:s')]       
        ];
     
        DB::table('ownerships')->insert($models);
    }
}
