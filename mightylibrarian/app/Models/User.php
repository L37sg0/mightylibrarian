<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements UserFields
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $hidden   = self::HIDDEN;
    protected $casts    = self::CASTS;
}
