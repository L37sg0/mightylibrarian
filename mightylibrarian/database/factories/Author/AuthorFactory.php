<?php

namespace Database\Factories\Author;

use App\Models\Author\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    protected $model = Author::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Author::FIELD_NAME => $this->faker->name
        ];
    }
}
