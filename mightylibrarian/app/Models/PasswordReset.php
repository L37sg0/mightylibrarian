<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model implements PasswordResetFields
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
