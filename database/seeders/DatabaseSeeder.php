<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory()->count(50)->create();

    }
}
