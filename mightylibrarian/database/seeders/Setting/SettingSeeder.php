<?php

namespace Database\Seeders\Setting;

use App\Models\Setting\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run() {
        Setting::factory()->create();
    }
}
