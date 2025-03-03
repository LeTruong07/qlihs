<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faculty;
use App\Models\SchoolClass;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // //Khai bao cac khoa
        $faculties = [
            'Khoa Công nghệ thông tin' => 'CNTT',
            'Khoa Khoa học máy tính' => 'KHMT',
            'Khoa Công nghệ thông tin Việt-Nhật' => 'CNTTVJ',
            'Khoa Hệ thống thông tin' => 'HTTT',
            'Khoa Kỹ thuật phần mềm' => 'KTPM',
            'Khoa An toàn thông tin' => 'ATTT',
        ];

        foreach ($faculties as $facultyName => $classPrefix) {
            $faculty = Faculty::create(['name' => $facultyName]);

            // Tao ra cac lop hoc
            for ($i = 1; $i <= 9; $i++) {
                SchoolClass::create([
                    'name' => "{$classPrefix}{$i}",
                    'faculty_id' => $faculty->id,
                ]);
            }
        }
    }
}