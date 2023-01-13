<?php

namespace App\Models;

interface PasswordResetFields
{
    public const TABLE_NAME         = 'password_resets';
    public const FIELD_CREATED_AT   = 'created_at';

    public const FIELD_EMAIL        = 'email';
    public const FIELD_TOKEN        = 'token';

    public const FILLABLE = [
        self::FIELD_EMAIL,
        self::FIELD_TOKEN
    ];

}
