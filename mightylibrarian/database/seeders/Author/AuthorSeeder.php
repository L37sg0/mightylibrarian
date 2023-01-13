<?php

namespace Database\Seeders\Author;

use App\Models\Author\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run() {
        Author::factory(10)->create();
    }
}
