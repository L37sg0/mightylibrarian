<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Address extends Model implements AddressFields
{
    protected $fillable = self::FILLABLE;
}
