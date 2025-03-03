<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SchoolClass>
 */
class SchoolClassFactory extends Factory
{
    protected $model = SchoolClass::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $classTypes = ['CNTT', 'CNTTVJ', 'KHMT'];
        static $classIndex = 0;
        static $classNumber = 1;

        $className = $classTypes[$classIndex] . $classNumber;

        // Update class number and index
        $classNumber++;
        if ($classNumber > 9) {
            $classNumber = 1;
            $classIndex++;
            if ($classIndex >= count($classTypes)) {
                $classIndex = 0;
            }
        }

        return [
            'name' => $className,
        ];
    }
}
