<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function(){
    $students = [
        ["name" => "Truong","id" => "1"],
        ["name" => "Long","id" => "2"],
        ["name" => "My","id" => "3"],
    ];
    return view('/students.index', ["students" => $students]);
});

Route::get('/students/{id}', function($id){
    return view('/students.show', ["id" => $id]);
});