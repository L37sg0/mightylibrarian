<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\Update;
use App\Models\Student\Address;
use App\Models\Student\Student as Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Throwable;

class Student extends Controller
{
    public $path        = "student";
    public $labelSingle = "Student";
    public $labelAll    = "Students";

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
        $prefixAddress = 'address_';
        $model->fill([
            Model::FIELD_NAME => $request->get(Model::FIELD_NAME),
            Model::FIELD_DATE_OF_BIRTH => $request->get(Model::FIELD_DATE_OF_BIRTH),
            Model::FIELD_GENDER => $request->get(Model::FIELD_GENDER),
            Model::FIELD_EMAIL => $request->get(Model::FIELD_EMAIL),
            Model::FIELD_PHONE => $request->get(Model::FIELD_PHONE),
            Model::FIELD_ADDRESS => [
                Address::FIELD_COUNTRY_CODE     => $request->get($prefixAddress . Address::FIELD_COUNTRY_CODE),
                Address::FIELD_PROVINCE         => $request->get($prefixAddress . Address::FIELD_PROVINCE),
                Address::FIELD_CITY             => $request->get($prefixAddress . Address::FIELD_CITY),
                Address::FIELD_POSTCODE         => $request->get($prefixAddress . Address::FIELD_POSTCODE),
                Address::FIELD_STREET_NAME      => $request->get($prefixAddress . Address::FIELD_STREET_NAME),
                Address::FIELD_STREET_NUMBER    => $request->get($prefixAddress . Address::FIELD_STREET_NUMBER),
                Address::FIELD_FLOOR            => $request->get($prefixAddress . Address::FIELD_FLOOR),
                Address::FIELD_SUIT_NUMBER      => $request->get($prefixAddress . Address::FIELD_SUIT_NUMBER),
            ],
            Model::FIELD_CLASS => $request->get(Model::FIELD_CLASS),

        ])->save();

        Session::flash("success", __("messages.success.$this->path.created", ["name" => $name]));
        return redirect(route("dashboard.$this->path.list"));
    }

    public function update(Update $request, $id)
    {
        $model = Model::find($id);

        $name = $request->get(Model::FIELD_NAME);
        $prefixAddress = 'address_';
        $model->fill([
            Model::FIELD_NAME               => $request->get(Model::FIELD_NAME),
            Model::FIELD_DATE_OF_BIRTH      => $request->get(Model::FIELD_DATE_OF_BIRTH),
            Model::FIELD_GENDER             => $request->get(Model::FIELD_GENDER),
            Model::FIELD_EMAIL              => $request->get(Model::FIELD_EMAIL),
            Model::FIELD_PHONE              => $request->get(Model::FIELD_PHONE),
            Model::FIELD_ADDRESS            => [
                Address::FIELD_COUNTRY_CODE     => $request->get($prefixAddress . Address::FIELD_COUNTRY_CODE),
                Address::FIELD_PROVINCE         => $request->get($prefixAddress . Address::FIELD_PROVINCE),
                Address::FIELD_CITY             => $request->get($prefixAddress . Address::FIELD_CITY),
                Address::FIELD_POSTCODE         => $request->get($prefixAddress . Address::FIELD_POSTCODE),
                Address::FIELD_STREET_NAME      => $request->get($prefixAddress . Address::FIELD_STREET_NAME),
                Address::FIELD_STREET_NUMBER    => $request->get($prefixAddress . Address::FIELD_STREET_NUMBER),
                Address::FIELD_FLOOR            => $request->get($prefixAddress . Address::FIELD_FLOOR),
                Address::FIELD_SUIT_NUMBER      => $request->get($prefixAddress . Address::FIELD_SUIT_NUMBER),
            ],
            Model::FIELD_CLASS              => $request->get(Model::FIELD_CLASS),

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
