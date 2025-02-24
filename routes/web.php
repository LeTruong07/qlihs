<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class); //Tao mot resource route cho StudentController 