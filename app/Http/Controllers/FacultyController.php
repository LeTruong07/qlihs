<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the faculties.
     */
    public function index()
    {
        $faculties = Faculty::all();
        return view('faculties.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new faculty.
     */
    public function create()
    {
        return view('faculties.create');
    }

    /**
     * Store a newly created faculty in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Faculty::create($request->all());

        return redirect()->route('faculties.index')
                         ->with('success', 'Faculty created successfully.');
    }

    /**
     * Display the specified faculty.
     */
    public function show(Faculty $faculty)
    {
        return view('faculties.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified faculty.
     */
    public function edit(Faculty $faculty)
    {
        return view('faculties.edit', compact('faculty'));
    }

    /**
     * Update the specified faculty in storage.
     */
    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $faculty->update($request->all());

        return redirect()->route('faculties.index')
                         ->with('success', 'Faculty updated successfully.');
    }

    /**
     * Remove the specified faculty from storage.
     */
    public function destroy(Faculty $faculty)
    {
        $faculty->delete();

        return redirect()->route('faculties.index')
                         ->with('success', 'Faculty deleted successfully.');
    }
}