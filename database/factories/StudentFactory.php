<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\SchoolClass;

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
        $skills = ['PHP', 'C#', 'Python', 'Java', 'JavaScript', 'Ruby', 'Go', 'Swift', 'Kotlin', 'TypeScript'];

        return [
            'name' => $this->faker->name(),
            'skill' => $this->faker->randomElement($skills),
            'school_class_id' => SchoolClass::factory(),
            'gpa' => $this->faker->randomFloat(2, 0, 4),
        ];
    }
}