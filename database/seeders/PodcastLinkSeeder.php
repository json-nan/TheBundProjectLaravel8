<?php

namespace Database\Seeders;

use App\Models\PodcastLink;
use Illuminate\Database\Seeder;

class PodcastLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PodcastLink::factory()->count(5)->create();
    }
}
