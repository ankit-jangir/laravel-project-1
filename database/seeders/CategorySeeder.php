<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'thermocouples'],
            ['name' => 'rtd'],
            ['name' => 'thermowells'],
            ['name' => 'cables'],
            ['name' => 'mi-cables'],
            ['name' => 'alloys'],
            ['name' => 'pyrometers'],
            ['name' => 'heaters'],
            ['name' => 'transmitters'],
            ['name' => 'gauges'],
            ['name' => 'temp-transmitters'],
            ['name' => 'connectors'],
            ['name' => 'controllers'],
        ]);
    }
}
