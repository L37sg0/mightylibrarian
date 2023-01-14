<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use App\Models\Publisher\Publisher as Model;

class Publisher extends Controller
{
    public function index()
    {
        $publishers = Model::Paginate(10);

        return view('admin.publisher.index', compact('publishers'));
    }

    public function create()
    {

    }

}
