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
    $student = Student::findOrFail($id); // findOrFail() Tra ve 1 dong du lieu tuong ung voi id, neu khong tim thay se tra ve loi 404
    return view('students.show', ["id" => $id, "student" => $student]);
});