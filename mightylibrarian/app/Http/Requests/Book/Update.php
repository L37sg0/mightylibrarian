<?php

namespace App\Http\Requests\Book;

use App\Models\Book\Book;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
//    public function authorize() {
//        return false;
//    }

    public function rules() {
        return [
            Book::FIELD_NAME => Globals::FORM_FIELD_REQUIRED
            . '|' . Globals::FORM_FIELD_UNIQUE . ':' . Book::TABLE_NAME
            . ',' . Book::FIELD_NAME . ',' . Globals::FORM_FIELD_EXCEPT . ',' . Book::FIELD_ID
        ];
    }
}
