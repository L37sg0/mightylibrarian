<?php

namespace App\Http\Requests\Book;

use App\Models\Book\BookIssue as Model;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class IssueUpdate extends FormRequest
{

    public function rules()
    {
        return [
            Model::FIELD_STUDENT_ID => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_BOOK_ID => Globals::FORM_FIELD_REQUIRED,
        ];
    }
}
