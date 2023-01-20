<?php

namespace App\Http\Requests\Book;

use App\Models\Book\Book as Model;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
//    public function authorize() {
//        return false;
//    }

    public function rules() {
        return [
            Model::FIELD_NAME            => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_CATEGORY_ID     => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_AUTHOR_ID       => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_PUBLISHER_ID    => Globals::FORM_FIELD_REQUIRED
        ];
    }
}
