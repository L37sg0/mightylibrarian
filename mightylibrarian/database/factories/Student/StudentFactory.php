<?php

namespace Database\Factories\Student;

use App\Models\Globals;
use App\Models\Student\Address;
use App\Models\Student\Gender;
use App\Models\Student\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        $streetEndings = ['Avenue', 'Str.', 'Drive', 'Lake'];
        $genders = array_column(Gender::cases(), Globals::ENUM_FIELD_VALUE);

        $address = [
            Address::FIELD_COUNTRY_CODE => $this->faker->countryCode,
            Address::FIELD_PROVINCE     => $this->faker->city,
            Address::FIELD_CITY         => $this->faker->city,
            Address::FIELD_POSTCODE     => $this->faker->postcode,
            Address::FIELD_STREET_NAME  => $this->faker->sentence(2). ' ' . $streetEndings[array_rand($streetEndings)],
            Address::FIELD_STREET_NUMBER => random_int(1, 299),
            Address::FIELD_FLOOR        => random_int(1, 16),
            Address::FIELD_SUIT_NUMBER  => random_int(100, 500)
        ];

        return [
            Student::FIELD_NAME             => $this->faker->name,
            Student::FIELD_DATE_OF_BIRTH    => date(Globals::DATE_FORMAT_YMD, mt_rand(1, 946750000)),
            Student::FIELD_GENDER           => $genders[array_rand($genders)],
            Student::FIELD_EMAIL            => $this->faker->safeEmail,
            Student::FIELD_PHONE            => $this->faker->phoneNumber,
            Student::FIELD_ADDRESS          => $address,
            Student::FIELD_CLASS            => $this->faker->sentence(3)
        ];
    }
}
