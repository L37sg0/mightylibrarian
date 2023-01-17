<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Author\Store;
use App\Http\Requests\Author\Update;
use App\Models\Author\Author as Model;
use Illuminate\Http\Request;

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

    public function update(Update $request, $author)
    {
        dd($request->all());
        dd($request->validated('_token'));
        dd($request->get('name'.$author));
        dd(\App\Models\Author\Author::find($author));
        return $request->get('name');
        dd($author, $request->name);
    }

    public function destroy($id)
    {

    }
}
