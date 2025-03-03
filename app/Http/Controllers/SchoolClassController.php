<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the classes.
     */
    public function index()
    {
        $schoolClasses = SchoolClass::all();
        return view('school-classes.index', compact('schoolClasses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Hien thi danh sach hoc sinh trong mot lop hoc va sort 
     * school-classes/{id} GET
     */
    public function show(Request $request, SchoolClass $schoolClass)
    {
        $sort = $request->input('sort', 'name');
        $direction = $request->input('direction', 'asc');

        $students = $schoolClass->students()
            ->orderBy($sort, $direction)
            ->get();

        return view('school-classes.show', compact('schoolClass', 'students', 'sort', 'direction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolClass $schoolClass)
    {
        //
    }
}
