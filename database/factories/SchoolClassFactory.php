<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use App\Models\Faculty;
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
        static $classTypes = [
            'CNTT' => 'Khoa Công nghệ thông tin',
            'CNTTVJ' => 'Khoa Công nghệ thông tin Việt-Nhật',
            'KHMT' => 'Khoa Khoa học máy tính',
            'HTTT' => 'Khoa Hệ thống thông tin',
            'KTPM' => 'Khoa Kỹ thuật phần mềm',
            'ATTT' => 'Khoa An toàn thông tin',
            'QTKD' => 'Khoa Quản trị kinh doanh', 
            'KT' => 'Khoa Kế toán', 
            'NN' => 'Khoa Ngoại ngữ', 
        ];

        static $classIndex = 0;
        static $classNumber = 1;

        $classPrefix = array_keys($classTypes)[$classIndex];
        $className = $classPrefix . $classNumber;

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
            'faculty_id' => Faculty::where('name', $classTypes[$classPrefix])->first()->id,
        ];
    }
}
