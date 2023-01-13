<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\Author\AuthorSeeder;
use Database\Seeders\Book\BookSeeder;
use Database\Seeders\Book\BookIssueSeeder;
use Database\Seeders\Category\CategorySeeder;
use Database\Seeders\Publisher\PublisherSeeder;
use Database\Seeders\Setting\SettingSeeder;
use Database\Seeders\Student\StudentSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserSeeder::class,
             AuthorSeeder::class,
             CategorySeeder::class,
             PublisherSeeder::class,
             BookSeeder::class,
             SettingSeeder::class,
             StudentSeeder::class,
             BookIssueSeeder::class,
         ]);
    }
}
