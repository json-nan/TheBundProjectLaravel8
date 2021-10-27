<?php

namespace Database\Seeders;

use App\Models\Designer;
use Illuminate\Database\Seeder;

class DesignerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Designer::factory()->count(20)->create();
    }
}
