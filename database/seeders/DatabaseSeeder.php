<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the FacultySeeder
        $this->call(FacultySeeder::class);

        // Create students
        Student::factory(100)->create();
    }
}