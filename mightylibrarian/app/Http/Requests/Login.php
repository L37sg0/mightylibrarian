<?php

namespace App\Http\Requests;

use App\Models\Globals;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
    public function rules() {
        return [
            User::FIELD_NAME        => Globals::FORM_FIELD_REQUIRED,
            User::FIELD_PASSWORD    => Globals::FORM_FIELD_REQUIRED
        ];
    }
}
