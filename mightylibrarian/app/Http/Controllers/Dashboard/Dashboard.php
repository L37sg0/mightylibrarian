<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Author\Author;
use App\Models\Book\Book;
use App\Models\Book\BookIssue;
use App\Models\Book\IssueStatus;
use App\Models\Category\Category;
use App\Models\Publisher\Publisher;
use App\Models\Student\Student;

class Dashboard extends Controller
{
    public $path = 'dashboard';

    public function index()
    {
        $path = $this->path;
        $report = [
            "authors"       => Author::all()->count(),
            "books"         => Book::all()->count(),
            "categories"    => Category::all()->count(),
            "publishers"    => Publisher::all()->count(),
            "Not returned books"        => BookIssue::where(BookIssue::FIELD_ISSUE_STATUS, IssueStatus::Not_Returned)->get()->count(),
            "students"      => Student::all()->count(),
        ];

        return view("admin.$this->path.index", compact("report"));
    }

}
