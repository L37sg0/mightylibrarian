<?php

namespace App\Console\Commands;

use App\Models\Setting\Setting;
use App\Models\Author\Author;
use App\Models\Book\Book;
use App\Models\Book\BookIssue;
use App\Models\Category\Category;
use App\Models\Publisher\Publisher;
use App\Models\Student\Student;
use Illuminate\Console\Command;
use Laravel\Scout\Console\ImportCommand;

class LibraryIndexImport extends Command
{
    protected $signature = "library:index:import";

    protected $description = "Import all models data to index";

    public const MODELS = [
        Author::class,
        Book::class,
        BookIssue::class,
        Category::class,
        Publisher::class,
        Student::class,
        Setting::class
    ];

    public function handle() {
        foreach (self::MODELS as $model) {
            $this->call(ImportCommand::class, ['model' => $model]);
        }
    }
}
