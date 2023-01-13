<?php

namespace Database\Factories\Book;

use App\Models\Book\Book;
use App\Models\Book\Status;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    /**
     * @return array|mixed[]
     * @throws Exception
     */
    public function definition()
    {
        return [
            Book::FIELD_NAME            => $this->faker->sentence(random_int(1,4)),
            Book::FIELD_CATEGORY_ID     => random_int(1, 10),
            Book::FIELD_AUTHOR_ID       => random_int(1, 10),
            Book::FIELD_PUBLISHER_ID    => random_int(1, 10),
            Book::FIELD_STATUS          => Status::Available->value
        ];
    }
}
