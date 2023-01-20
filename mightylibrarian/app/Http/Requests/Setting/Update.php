<?php

namespace App\Http\Requests\Setting;

use App\Models\Setting\Setting as Model;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
//    public function authorize() {
//        return false;
//    }

    public function rules() {
        return [
            Model::FIELD_RETURN_DAYS    => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_FINE           => Globals::FORM_FIELD_REQUIRED
        ];
    }
}
