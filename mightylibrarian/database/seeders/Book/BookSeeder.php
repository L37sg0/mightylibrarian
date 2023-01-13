<?php

namespace Database\Seeders\Book;

use App\Models\Book\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run() {
        Book::factory(10)->create();
    }
}
