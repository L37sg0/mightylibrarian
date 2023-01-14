<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book\Book as Model;

class Book extends Controller
{
    public function index()
    {
        $books = Model::Paginate(10);

        return view('admin.book.index', compact('books'));
    }

    public function create()
    {

    }
//
//    public function store(Store $request)
//    {
//
//    }
//
//    public function edit(Model $author)
//    {
//
//    }
//
//    public function update(Update $request, $id)
//    {
//
//    }
//
//    public function destroy($id)
//    {
//
//    }

}
