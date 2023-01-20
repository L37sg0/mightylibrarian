<?php

namespace App\Http\Requests\Student;

use App\Models\Student\Student as Model;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
//    public function authorize() {
//        return false;
//    }

    public function rules() {
        return [
            Model::FIELD_NAME           => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_DATE_OF_BIRTH  => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_GENDER         => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_EMAIL          => Globals::FORM_FIELD_REQUIRED . '|' . Globals::FORM_FIELD_EMAIL,
            Model::FIELD_PHONE          => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_ADDRESS        => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_CLASS          => Globals::FORM_FIELD_REQUIRED,
        ];
    }
}
