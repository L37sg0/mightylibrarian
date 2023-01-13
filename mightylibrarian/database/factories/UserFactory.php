<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            User::FIELD_NAME                => fake()->name(),
            User::FIELD_EMAIL               => fake()->unique()->safeEmail(),
            User::FIELD_EMAIL_VERIFIED_AT   => now(),
            User::FIELD_PASSWORD            => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            User::FIELD_REMEMBER_TOKEN      => Str::random(10),
        ];
    }

    /**
     * @return UserFactory
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            User::FIELD_EMAIL_VERIFIED_AT => null,
        ]);
    }
}
