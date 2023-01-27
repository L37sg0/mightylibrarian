<?php

namespace App\Http\Requests\Author;

use App\Models\Author\Author as Model;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
//    public function authorize() {
//        return false;
//    }

    public function rules() {
        return [
            Model::FIELD_NAME => Globals::FORM_FIELD_REQUIRED
            . '|' . Globals::FORM_FIELD_UNIQUE . ':' . Model::TABLE_NAME
            . ',' . Model::FIELD_NAME . ',' . Globals::FORM_FIELD_EXCEPT . ',' . Model::FIELD_ID
        ];
    }
}
