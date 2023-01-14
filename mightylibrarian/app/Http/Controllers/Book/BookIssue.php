<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book\BookIssue as Model;

class BookIssue extends Controller
{

    public function index()
    {
        $bookIssues = Model::Paginate(10);

        return view('admin.book-issue.index', compact('bookIssues'));
    }

    public function create()
    {

    }
}
