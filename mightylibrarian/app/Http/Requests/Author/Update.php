<?php

namespace App\Http\Requests\Author;

use App\Models\Author\Author;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
//    public function authorize() {
//        return false;
//    }

    public function rules() {
        return [];
//            Author::FIELD_NAME => Globals::FORM_FIELD_REQUIRED
//            . '|' . Globals::FORM_FIELD_UNIQUE . ':' . Author::TABLE_NAME
////            . ',' . Globals::FORM_FIELD_EXCEPT . ',' . Author::FIELD_ID
//        ];
    }
}
