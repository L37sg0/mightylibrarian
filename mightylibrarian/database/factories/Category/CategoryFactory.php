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
        $categories = [
            'Math', 'Science', 'History', 'Music', 'Languages',
            'Culture', 'Sport', 'Literature', 'Technology', 'Lifestyle'
        ];

        return [
            Category::FIELD_NAME => $categories[(array_rand($categories))] . ' and ' . $categories[(array_rand($categories))]
        ];
    }
}
