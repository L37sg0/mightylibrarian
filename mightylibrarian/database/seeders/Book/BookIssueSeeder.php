<?php

namespace Database\Seeders\Book;

use App\Models\Book\BookIssue;
use Illuminate\Database\Seeder;

class BookIssueSeeder extends Seeder
{
    public function run()
    {
        BookIssue::factory(10)->create();
    }

}
