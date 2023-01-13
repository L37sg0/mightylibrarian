<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FailedJob extends Model implements FailedJobFields
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
