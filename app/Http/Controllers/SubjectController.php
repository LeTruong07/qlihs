<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Student;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the subjects.
     */
    public function index()
    {
        $subjects = Subject::paginate(10); 
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Display the specified subject and its students.
     */
    public function show(Subject $subject)
    {
        $students = $subject->students()->paginate(10); 
        return view('subjects.show', compact('subject', 'students'));
    }
}