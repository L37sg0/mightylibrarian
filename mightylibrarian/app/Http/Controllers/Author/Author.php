<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\Author\Update;
use App\Models\Author\Author as Model;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class Author extends Controller
{
    public function index(Request $request)
    {
        $authors = Model::Paginate(10);
        $search = $request->get('search');
        if ($search) {
            $authors = Model::search($search)->paginate(10);
        }

        return view('admin.author.index', compact('authors'));
    }

    public function create(Update $request)
    {
        $author = new Model();
        $name   = $request->get(Model::FIELD_NAME);
        $author->fill([
            Model::FIELD_NAME => $name
        ])->save();

        $messages = new MessageBag(["Author '$name' created."]);
        return redirect(route('dashboard.authors.list'));
    }

    public function update(Update $request, $id)
    {
        $author = Model::find($id);

        $name = $request->get(Model::FIELD_NAME);
        $author->fill([
            Model::FIELD_NAME => $name
        ])->save();

        $messages = new MessageBag(["Author '$name' updated."]);
        return redirect(route('dashboard.authors.list'));
    }

    public function destroy($id)
    {
        (Model::find($id))->delete();
        return redirect(route('dashboard.authors.list'));
    }
}
