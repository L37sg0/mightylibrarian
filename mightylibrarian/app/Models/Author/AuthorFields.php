<?php

namespace App\Models\Author;

interface AuthorFields
{
    public const TABLE_NAME         = 'authors';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_NAME         = 'name';

    public const FILLABLE = [
        self::FIELD_NAME
    ];
}
