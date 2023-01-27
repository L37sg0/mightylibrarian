<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\IssueUpdate as Update;
use App\Models\Book\Book;
use App\Models\Book\BookIssue as Model;
use App\Models\Globals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

class BookIssue extends Controller
{
    public $path        = "book-issue";
    public $labelSingle = "Book Issue";
    public $labelAll    = "Book Issues";

    public function index(Request $request)
    {
        $path           = $this->path;
        $labelSingle    = $this->labelSingle;
        $labelAll       = $this->labelAll;
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

        $model->fill([
            Model::FIELD_STUDENT_ID     => explode(Globals::SEARCH_DIVIDER, $request->get(Model::FIELD_STUDENT_ID))[1],
            Model::FIELD_BOOK_ID        => explode(Globals::SEARCH_DIVIDER, $request->get(Model::FIELD_BOOK_ID))[1],
            Model::FIELD_ISSUE_DATE     => $request->get(Model::FIELD_ISSUE_DATE),
            Model::FIELD_RETURN_DATE    => $request->get(Model::FIELD_RETURN_DATE),
            Model::FIELD_ISSUE_STATUS   => $request->get(Model::FIELD_ISSUE_STATUS),
            Model::FIELD_RETURN_DAY     => $request->get(Model::FIELD_RETURN_DAY)
        ])->save();

        $name = $model->getAttribute(Model::REL_BOOK)->getAttribute(Book::FIELD_NAME);

        Session::flash("success", __("messages.success.$this->path.created", ["name" => $name]));
        return redirect(route("dashboard.$this->path.list"));
    }

    public function update(Update $request, $id)
    {
        $model = Model::find($id);
        $name = $model->getAttribute(Model::REL_BOOK)->getAttribute(Book::FIELD_NAME);

        $model->fill([
            Model::FIELD_STUDENT_ID     => explode(Globals::SEARCH_DIVIDER, $request->get(Model::FIELD_STUDENT_ID))[1],
            Model::FIELD_BOOK_ID        => explode(Globals::SEARCH_DIVIDER, $request->get(Model::FIELD_BOOK_ID))[1],
            Model::FIELD_ISSUE_DATE     => $request->get(Model::FIELD_ISSUE_DATE),
            Model::FIELD_RETURN_DATE    => $request->get(Model::FIELD_RETURN_DATE),
            Model::FIELD_ISSUE_STATUS   => $request->get(Model::FIELD_ISSUE_STATUS),
            Model::FIELD_RETURN_DAY     => $request->get(Model::FIELD_RETURN_DAY)
        ])->save();

        Session::flash("success", __("messages.success.$this->path.updated", ["name" => $name]));
        return redirect(route("dashboard.$this->path.list"));
    }

    public function destroy($id)
    {
        $model = Model::find($id);
        $name = $model->getAttribute(Model::REL_BOOK)->name;
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
