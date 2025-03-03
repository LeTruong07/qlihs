<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
/**
 * Cac lenh artisan tinker
 * Student::all() -> lay tat ca du lieu trong bang students
 * Student::create(['name' => 'Nguyen Van A', 'skill' => 10, 'class' => '12A','gpa' => 3.5]) -> tao 1 dong moi trong bang students
 * Student::find(1) -> tim dong co id = 1
 * Student::find(1)->update(['name' => 'Nguyen Van B']) -> cap nhat ten cua dong co id = 1
 * Student::find(1)->delete() -> xoa dong co id = 1
 * Student::where('skill', '>', 5) -> tim tat ca cac dong co skill > 5
 * Student::where('skill', '>', 5)->first() -> tim dong dau tien co skill > 5
 * Student::where('skill', '>', 5)->firstOrFail() -> tim dong dau tien co skill > 5, neu khong tim thay se tra ve loi 404
 * Student::where('skill', '>', 5)->count() -> dem so luong dong co skill > 5
 */
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('skills')->nullable();
            $table->foreignId('school_class_id')->constrained()->onDelete('cascade');
            $table->float('gpa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
