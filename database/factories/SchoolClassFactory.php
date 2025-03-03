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
        static $classTypes = ['Công nghệ thông tin(CNTT', 'Công nghệ thông tin Việt-Nhật(CNTTVJ', 'Khoa học máy tính(KHMT','Hệ thống thông tin(HTTT','Kỹ thuật phần mềm(KTPM','An toàn thông tin(ATTT'];
        static $classIndex = 0;
        static $classNumber = 1;

        $className = $classTypes[$classIndex] . $classNumber . ')';

        // Cap nhat classNumber va classIndex
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
