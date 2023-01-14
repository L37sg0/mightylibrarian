<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category\Category as Model;

class Category extends Controller
{

    public function index()
    {
        $categories = Model::Paginate(10);

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {

    }
}
