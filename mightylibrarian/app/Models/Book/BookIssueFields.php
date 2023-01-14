<?php

namespace App\Models\Book;

use App\Models\Globals;

interface BookIssueFields
{
    public const TABLE_NAME         = 'book_issues';
    public const FIELD_ID           = 'id';
    public const FIELD_CREATED_AT   = 'created_at';
    public const FIELD_UPDATED_AT   = 'updated_at';

    public const FIELD_STUDENT_ID   = 'student_id';
    public const FIELD_BOOK_ID      = 'book_id';
    public const FIELD_ISSUE_DATE   = 'issue_date';
    public const FIELD_RETURN_DATE  = 'return_date';
    public const FIELD_ISSUE_STATUS = 'issue_status';
    public const FIELD_RETURN_DAY   = 'return_day';

    public const REL_STUDENT        = 'student';
    public const REL_BOOK           = 'book';

    public const FILLABLE = [
        self::FIELD_STUDENT_ID,
        self::FIELD_BOOK_ID,
        self::FIELD_ISSUE_DATE,
        self::FIELD_RETURN_DATE,
        self::FIELD_ISSUE_STATUS,
        self::FIELD_RETURN_DAY
    ];

    public const CASTS = [
        self::FIELD_ISSUE_DATE      => Globals::CAST_FORMAT_DATETIME_YMD,
        self::FIELD_RETURN_DATE     => Globals::CAST_FORMAT_DATETIME_YMD,
        self::FIELD_RETURN_DAY      => Globals::CAST_FORMAT_DATETIME_YMD,
        self::FIELD_ISSUE_STATUS    => IssueStatus::class
    ];
}
