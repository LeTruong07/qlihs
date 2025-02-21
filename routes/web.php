<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function(){
    $students = Student::all();
    return view('students.index', ["students" => $students]);
});

Route::get('/students/create', function () {
    return view('students.create');
});

Route::get('/students/{id}', function($id){
    $student = Student::findOrFail($id);
    return view('students.show', ["id" => $id, "student" => $student]);
});