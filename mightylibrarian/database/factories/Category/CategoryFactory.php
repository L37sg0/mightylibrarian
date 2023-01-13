<?php

namespace Database\Factories\Category;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Category::FIELD_NAME => $this->faker->name
        ];
    }
}
