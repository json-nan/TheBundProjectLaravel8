<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassOfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_ofs')->insert([
            [
                'name' => 'END',
                'year' => '2021',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Resonancia',
                'year' => '2020',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
