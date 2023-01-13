<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model implements PersonalAccessTokenFields
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
