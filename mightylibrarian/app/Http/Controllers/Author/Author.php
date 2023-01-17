<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Author\Store;
use App\Http\Requests\Author\Update;
use App\Models\Author\Author as Model;

class Author extends Controller
{
    public function index()
    {
        $authors = Model::Paginate(10);

        return view('admin.author.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.author.new-or-edit');
    }

    public function store(Store $request)
    {

    }

    public function edit(Author $author)
    {

    }

    public function update(Update $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
