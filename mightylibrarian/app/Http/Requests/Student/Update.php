<?php

namespace App\Http\Requests\Student;

use App\Models\Student\Address;
use App\Models\Student\Student as Model;
use App\Models\Globals;
use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
//    public function authorize() {
//        return false;
//    }

    public function rules() {
        $prefix = 'address_';
        return [
            Model::FIELD_NAME           => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_DATE_OF_BIRTH  => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_GENDER         => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_EMAIL          => Globals::FORM_FIELD_REQUIRED . '|' . Globals::FORM_FIELD_EMAIL,
            Model::FIELD_PHONE          => Globals::FORM_FIELD_REQUIRED,
            Model::FIELD_CLASS          => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_COUNTRY_CODE   => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_PROVINCE       => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_CITY           => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_POSTCODE       => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_STREET_NAME    => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_STREET_NUMBER  => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_FLOOR          => Globals::FORM_FIELD_REQUIRED,
            $prefix . Address::FIELD_SUIT_NUMBER    => Globals::FORM_FIELD_REQUIRED,
        ];
    }
}
