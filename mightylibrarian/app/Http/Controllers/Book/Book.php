<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\Update;
use App\Models\Book\Book as Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

class Book extends Controller
{
    public $path = "book";
    public $labelSingle = "Book";
    public $labelAll = "Books";

    public function index(Request $request)
    {
        $path = $this->path;
        $labelSingle = $this->labelSingle;
        $labelAll = $this->labelAll;
        $models = Model::Paginate(10);
        $search = $request->get("search");
        if ($search) {
            $models = Model::search($search)->paginate(10);
        }

        return view("admin.$this->path.index", compact(
            "models",
            "path",
            "labelSingle",
            "labelAll"
        ));
    }

    public function create(Update $request)
    {
        $model = new Model();
        $name = $request->get(Model::FIELD_NAME);
        $model->fill([
            Model::FIELD_NAME => $name,
            Model::FIELD_CATEGORY_ID => $request->get(Model::FIELD_CATEGORY_ID),
            Model::FIELD_AUTHOR_ID => $request->get(Model::FIELD_AUTHOR_ID),
            Model::FIELD_PUBLISHER_ID => $request->get(Model::FIELD_PUBLISHER_ID),
            Model::FIELD_STATUS => $request->get(Model::FIELD_STATUS)
        ])->save();

        Session::flash("success", __("messages.success.$this->path.created", ["name" => $name]));
        return redirect(route("dashboard.$this->path.list"));
    }

    public function update(Update $request, $id)
    {
        $model = Model::find($id);

        $name = $request->get(Model::FIELD_NAME);
        $model->fill([
            Model::FIELD_NAME           => $name,
            Model::FIELD_CATEGORY_ID    => $request->get(Model::FIELD_CATEGORY_ID),
            Model::FIELD_AUTHOR_ID      => $request->get(Model::FIELD_AUTHOR_ID),
            Model::FIELD_PUBLISHER_ID   => $request->get(Model::FIELD_PUBLISHER_ID),
            Model::FIELD_STATUS         => $request->get(Model::FIELD_STATUS)
        ])->save();

        Session::flash("success", __("messages.success.$this->path.updated", ["name" => $name]));
        return redirect(route("dashboard.$this->path.list"));
    }

    public function destroy($id)
    {
        $model = Model::find($id);
        $name = $model->getAttribute(Model::FIELD_NAME);
        $errors = [];

        try {
            $model->delete();
            Session::flash("success", __("messages.success.$this->path.deleted", ["name" => $name]));
        } catch (Throwable $e) {
            $errors[] = __("messages.error.$this->path.deleted", ["name" => $name]);
        }

        return redirect(route("dashboard.$this->path.list"))->withErrors($errors);
    }
}
