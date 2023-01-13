<?php

namespace Database\Seeders\Student;

use App\Models\Student\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run() {
        Student::factory(19)->create();
    }
}
