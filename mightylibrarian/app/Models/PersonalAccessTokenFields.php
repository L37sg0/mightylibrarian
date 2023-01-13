<?php

namespace App\Models;

interface PersonalAccessTokenFields
{
    public const TABLE_NAME         = 'personal_access_tokens';
    public const FIELD_ID           = 'id';
    public const FIELD_LAST_USED_AT = 'last_used_at';
    public const FIELD_EXPIRES_AT   = 'expires_at';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_TOKENABLE    = 'tokenable';
    public const FIELD_NAME         = 'name';
    public const FIELD_TOKEN        = 'token';
    public const FIELD_ABILITIES    = 'abilities';

    public const FILLABLE = [
        self::FIELD_TOKENABLE,
        self::FIELD_NAME,
        self::FIELD_TOKEN,
        self::FIELD_ABILITIES
    ];

}
