<?php

namespace Database\Factories\Publisher;

use App\Models\Publisher\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    protected $model = Publisher::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Publisher::FIELD_NAME => $this->faker->name
        ];
    }
}
