<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('school_classes', function (Blueprint $table) {
            $table->foreignId('faculty_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('school_classes', function (Blueprint $table) {
            $table->dropForeign(['faculty_id']);
            $table->dropColumn('faculty_id');
        });

        Schema::dropIfExists('faculties');
    }
};