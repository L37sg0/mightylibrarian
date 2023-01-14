<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Setting as Model;

class Setting extends Controller
{
    public function index()
    {
        $settings = Model::Paginate(10);

        return view('admin.setting.index', compact('settings'));
    }

    public function create()
    {

    }
}
