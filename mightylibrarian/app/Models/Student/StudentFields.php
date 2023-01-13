<?php

namespace App\Models\Student;

use App\Models\Globals;

interface StudentFields
{
    public const TABLE_NAME         = 'students';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_NAME             = 'name';
    public const FIELD_DATE_OF_BIRTH    = 'date_of_birth';
    public const FIELD_GENDER           = 'gender';
    public const FIELD_EMAIL            = 'email';
    public const FIELD_PHONE            = 'phone';
    public const FIELD_ADDRESS          = 'address';
    public const FIELD_CLASS            = 'class';

    public const FILLABLE = [
        self::FIELD_NAME,
        self::FIELD_DATE_OF_BIRTH,
        self::FIELD_GENDER,
        self::FIELD_EMAIL,
        self::FIELD_PHONE,
        self::FIELD_ADDRESS,
        self::FIELD_CLASS
    ];

    public const CASTS = [
        self::FIELD_DATE_OF_BIRTH   => Globals::CAST_FORMAT_DATETIME_YMD,
        self::FIELD_GENDER          => Gender::class,
        self::FIELD_ADDRESS         => Globals::CAST_FORMAT_ARRAY
    ];

}
