<?php

namespace App\Models\Book;

interface BookFields
{
    public const TABLE_NAME         = 'books';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_NAME         = 'name';
    public const FIELD_CATEGORY_ID  = 'category_id';
    public const FIELD_AUTHOR_ID    = 'author_id';
    public const FIELD_PUBLISHER_ID = 'publisher_id';
    public const FIELD_STATUS       = 'status';

    public const REL_AUTHOR         = 'author';
    public const REL_CATEGORY       = 'category';
    public const REL_PUBLISHER      = 'publisher';

    public const FILLABLE = [
        self::FIELD_NAME,
        self::FIELD_CATEGORY_ID,
        self::FIELD_AUTHOR_ID,
        self::FIELD_PUBLISHER_ID,
        self::FIELD_STATUS
    ];

    public const CASTS = [
        self::FIELD_STATUS => Status::class
    ];
}
