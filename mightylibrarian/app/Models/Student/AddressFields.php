<?php

namespace App\Models\Student;

interface AddressFields
{
    public const FIELD_COUNTRY_CODE     = 'country_code';
    public const FIELD_PROVINCE         = 'province';
    public const FIELD_CITY             = 'city';
    public const FIELD_POSTCODE         = 'postcode';
    public const FIELD_STREET_NAME      = 'street_name';
    public const FIELD_STREET_NUMBER    = 'street_number';
    public const FIELD_FLOOR            = 'floor';
    public const FIELD_SUIT_NUMBER      = 'suit_number';

    public const FILLABLE = [
        self::FIELD_COUNTRY_CODE,
        self::FIELD_PROVINCE,
        self::FIELD_CITY,
        self::FIELD_POSTCODE,
        self::FIELD_STREET_NAME,
        self::FIELD_STREET_NUMBER,
        self::FIELD_FLOOR,
        self::FIELD_SUIT_NUMBER
    ];
}
