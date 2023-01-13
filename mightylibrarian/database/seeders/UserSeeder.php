<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run() {
        User::factory(1)->create();

//        User::factory()->create([
//            User::FIELD_NAME    => 'Test User',
//            User::FIELD_EMAIL   => 'test@example.com',
//        ]);
    }
}
