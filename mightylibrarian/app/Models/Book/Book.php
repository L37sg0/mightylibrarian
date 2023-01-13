<?php

namespace App\Models\Book;

use App\Models\Author\Author;
use App\Models\Category\Category;
use App\Models\Publisher\Publisher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model implements BookFields
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    /**
     * @return BelongsTo
     */
    public function author() {
        return $this->belongsTo(
            Author::class,
            self::FIELD_AUTHOR_ID,
            Author::FIELD_ID
        );
    }

    /**
     * @return BelongsTo
     */
    public function category() {
        return $this->belongsTo(
            Category::class,
            self::FIELD_CATEGORY_ID,
            Category::FIELD_ID
        );
    }

    /**
     * @return BelongsTo
     */
    public function publisher() {
        return $this->belongsTo(
            Publisher::class,
            self::FIELD_PUBLISHER_ID,
            Publisher::FIELD_ID
        );
    }
}
