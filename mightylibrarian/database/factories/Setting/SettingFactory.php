<?php

namespace Database\Factories\Setting;

use App\Models\Globals;
use App\Models\Setting\ReturnDays;
use App\Models\Setting\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    protected $model = Setting::class;

    /**
     * @return array|mixed[]
     */
    public function definition()
    {
        return [
            Setting::FIELD_RETURN_DAYS  => array_rand(
                array_column(ReturnDays::cases(),Globals::ENUM_FIELD_VALUE)
            ),
            Setting::FIELD_FINE         => 5
        ];
    }
}
