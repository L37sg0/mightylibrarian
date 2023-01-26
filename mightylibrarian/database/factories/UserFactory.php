<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            User::FIELD_NAME                => fake()->firstName,
            User::FIELD_EMAIL               => fake()->unique()->safeEmail(),
            User::FIELD_EMAIL_VERIFIED_AT   => now(),
            User::FIELD_PASSWORD            => Hash::make('password'),
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
