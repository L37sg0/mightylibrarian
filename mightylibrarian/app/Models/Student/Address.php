<?php

namespace App\Models\Student;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use InvalidArgumentException;

class Address extends Model implements CastsAttributes, AddressFields
{
    protected $fillable = self::FILLABLE;

    /**
     * @inheritDoc
     */
    public function get($model, string $key, $value, array $attributes)
    {
        return new self::class(self::FILLABLE);
    }

    /**
     * @inheritDoc
     */
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof self::class) {
            throw new InvalidArgumentException('The given value is not an Address instance.');
        }

        $data = [];
        foreach (self::FILLABLE as $attributeName) {
            $data[$attributeName] = $value->getAttribute($attributeName);
        }
        return $data;
    }
}
