<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = ['PHP', 'C#', 'Python', 'Java', 'JavaScript', 'Ruby', 'Go', 'Swift', 'Kotlin', 'TypeScript', 'SQL', 'HTML', 'CSS', 'C++', 'C', 'Rust', 'Lua'];

        foreach ($subjects as $subject) {
            Subject::create(['name' => $subject]);
        }
    }
}