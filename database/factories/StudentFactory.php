<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class; // Model nay se duoc su dung de tao du lieu

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $skills = ['PHP', 'C#', 'Python', 'Java', 'JavaScript', 'Ruby', 'Go', 'Swift', 'Kotlin', 'TypeScript'];
        $classes = [];

        // Tao cac lop hoc tu 101 den 509
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 9; $j++) {
                $classes[] = $i . '0' . $j;
            }
        }

        return [
            'name' => $this->faker->name(),
            'skill' => $this->faker->randomElement($skills),
            'class' => $this->faker->randomElement($classes),
            'gpa' => $this->faker->randomFloat(2, 0, 4),
        ];
    }
}
