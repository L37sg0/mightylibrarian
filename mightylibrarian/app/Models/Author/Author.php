<?php

namespace App\Models\Author;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Author extends Model implements AuthorFields
{
    use HasFactory;
    use Searchable;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
