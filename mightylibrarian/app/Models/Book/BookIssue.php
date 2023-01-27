<?php

namespace App\Models\Book;

use App\Models\Student\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class BookIssue extends Model implements BookIssueFields
{
    use HasFactory;
    use Searchable;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;

    /**
     * @return BelongsTo
     */
    public function student() {
        return $this->belongsTo(
            Student::class,
            self::FIELD_STUDENT_ID,
            Student::FIELD_ID
        );
    }

    public function book() {
        return $this->belongsTo(
            Book::class,
            self::FIELD_BOOK_ID,
            Book::FIELD_ID
        );
    }
}
