<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function(){
    $students = [
        ["name" => "Truong","id" => "1","skill" => "50"],
        ["name" => "Long","id" => "2","skill" => "60"],
        ["name" => "My","id" => "3","skill" => "70"],
        ["name" => "Hai","id" => "4","skill" => "40"],
        ["name" => "Hoa","id" => "5","skill" => "80"],
    ];
    return view('/students.index', ["students" => $students]);
});

Route::get('/students/create', function () {
    return view('students.create');
});

Route::get('/students/{id}', function($id){
    return view('/students.show', ["id" => $id]);
});