<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\SchoolClass;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = Subject::pluck('name')->toArray();
        $skillsCount = rand(1, min(count($subjects) - 1, 8));
        $skills = $this->faker->randomElements($subjects, $skillsCount);
        $remainingSubjects = array_diff($subjects, $skills);
        $currentlyLearningCount = rand(1, min(count($remainingSubjects), 4));
        $currently_learning = $this->faker->randomElements($remainingSubjects, $currentlyLearningCount);
        $is_graduated = count($skills) > 8;

        return [
            'name' => $this->faker->name(),
            'skills' => $skills,
            'school_class_id' => SchoolClass::inRandomOrder()->first()->id,
            'gpa' => $this->faker->randomFloat(2, 0, 4),
            'gender' => $this->faker->randomElement(['Nam', 'Nữ']),
            'date_of_birth' => $this->faker->date(),
            'phone_number' => $this->faker->phoneNumber(),
            'currently_learning' => $currently_learning,
            'is_graduated' => $is_graduated,
        ];
    }
}