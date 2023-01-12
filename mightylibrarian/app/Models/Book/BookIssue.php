<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookIssue extends Model implements BookIssueFields
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
