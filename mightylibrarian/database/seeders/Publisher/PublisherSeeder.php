<?php

namespace Database\Seeders\Publisher;

use App\Models\Publisher\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    public function run() {
        Publisher::factory(10)->create();
    }
}
