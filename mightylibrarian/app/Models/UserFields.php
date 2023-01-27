<?php

namespace App\Models;

interface UserFields
{
    public const TABLE_NAME         = 'users';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_NAME                 = 'name';
    public const FIELD_EMAIL                = 'email';
    public const FIELD_EMAIL_VERIFIED_AT    = 'email_verified_at';
    public const FIELD_PASSWORD             = 'password';
    public const FIELD_REMEMBER_TOKEN       = 'remember_token';

    public const FILLABLE = [
        self::FIELD_NAME,
        self::FIELD_EMAIL,
        self::FIELD_PASSWORD,
        self::FIELD_EMAIL_VERIFIED_AT,
    ];

    public const HIDDEN = [
        self::FIELD_PASSWORD,
        self::FIELD_REMEMBER_TOKEN
    ];

    public const CASTS = [
        self::FIELD_EMAIL_VERIFIED_AT => Globals::CAST_FORMAT_DATETIME_YMD
    ];

}
