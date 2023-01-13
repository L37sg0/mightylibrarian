<?php

namespace App\Models\Setting;

interface SettingFields
{
    public const TABLE_NAME         = 'settings';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_RETURN_DAYS  = 'return_days';
    public const FIELD_FINE         = 'fine';

    public const FILLABLE = [
        self::FIELD_RETURN_DAYS,
        self::FIELD_FINE
    ];

    public const CASTS = [
        self::FIELD_RETURN_DAYS => ReturnDays::class
    ];

}
