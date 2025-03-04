<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the FacultySeeder
        $this->call(FacultySeeder::class);

        // Call the SubjectSeeder
        $this->call(SubjectSeeder::class);

        // Call the StudentSeeder
        $this->call(StudentSeeder::class);
    }
}