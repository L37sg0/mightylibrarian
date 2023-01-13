<?php

namespace App\Models;

interface Globals
{
    public const CAST_FORMAT_DATETIME_YMD   = 'datetime:Y-m-d';
    public const CAST_FORMAT_JSON           = 'json';
    public const CAST_FORMAT_ARRAY          = 'array';

    public const ON_DELETE_CASCADE = 'cascade';

    public const ENUM_FIELD_NAME    = 'name';
    public const ENUM_FIELD_VALUE   = 'value';

    public const DATE_FORMAT_YMD    = 'Y-m-d';
}
