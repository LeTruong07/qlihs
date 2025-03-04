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
        // Danh sach cac khoa
        $faculties = [
            'Khoa Công nghệ thông tin' => 'CNTT',
            'Khoa Khoa học máy tính' => 'KHMT',
            'Khoa Công nghệ thông tin Việt-Nhật' => 'CNTTVJ',
            'Khoa Hệ thống thông tin' => 'HTTT',
            'Khoa Kỹ thuật phần mềm' => 'KTPM',
            'Khoa An toàn thông tin' => 'ATTT',
            'Khoa Quản trị kinh doanh' => 'QTKD',
            'Khoa Kế toán' => 'KT',
            'Khoa Ngoại ngữ' => 'NN',
        ];

        foreach ($faculties as $facultyName => $classPrefix) {
            $faculty = Faculty::create(['name' => $facultyName]);

            //Tao lop hoc cho khoa
            for ($i = 1; $i <= 9; $i++) {
                SchoolClass::create([
                    'name' => "{$classPrefix}{$i}",
                    'faculty_id' => $faculty->id,
                ]);
            }
        }
    }
}