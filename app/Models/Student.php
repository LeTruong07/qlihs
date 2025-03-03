<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'skill', 'school_class_id', 'gpa'];

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
