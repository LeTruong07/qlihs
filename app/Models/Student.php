<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'skills', 'school_class_id', 'gpa', 'gender', 'date_of_birth', 'phone_number', 'currently_learning', 'is_graduated'
    ];

    protected $casts = [
        'skills' => 'array',
        'currently_learning' => 'array',
        'is_graduated' => 'boolean',
    ];

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject');
    }
}