<?php

namespace App\Models\Publisher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Publisher extends Model implements PublisherFields
{
    use HasFactory;
    use Searchable;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
