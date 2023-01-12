<?php

namespace App\Models\Author;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model implements AuthorFields
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
