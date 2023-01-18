<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Author\Store;
use App\Http\Requests\Author\Update;
use App\Models\Author\Author as Model;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class Author extends Controller
{
    public function index()
    {
        $authors = Model::Paginate(10);

        return view('admin.author.index', compact('authors'));
    }

    public function create(Update $request)
    {
        $author = new Model();
        $author->fill([
            Model::FIELD_NAME => $request->get(Model::FIELD_NAME)
        ])->save();
        return redirect(route('dashboard.authors.list'));
    }

    public function update(Update $request, $id)
    {
        $author = Model::find($id);
        $author->fill([
            Model::FIELD_NAME => $request->get(Model::FIELD_NAME)
        ])->save();
        return redirect(route('dashboard.authors.list'));
    }

    public function destroy($id)
    {
        (Model::find($id))->delete();
        return redirect(route('dashboard.authors.list'));
    }
}
