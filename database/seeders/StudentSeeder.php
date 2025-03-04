<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\SchoolClass;
use App\Models\Subject;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $schoolClasses = SchoolClass::all();
        $subjects = Subject::all();

        foreach ($schoolClasses as $schoolClass) {
            $students = Student::factory()->count(40)->create([
                'school_class_id' => $schoolClass->id,
            ]);

            foreach ($students as $student) {
                $student->subjects()->attach(
                    $subjects->random(rand(1, 4))->pluck('id')->toArray()
                );
            }
        }
    }
}
