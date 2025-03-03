<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Hien thi danh sach hoc sinh va thanh tim kiem
     * /students GET
     */
    public function index(Request $request)
    {
        $search = $request->input('search'); 
        $students = Student::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                             ->orWhere(function ($query) use ($search) {
                                 if (is_numeric($search)) {
                                     $query->where('id', $search);
                                 }
                             });
            })
            ->get();

        return view('students.index', compact('students', 'search'));
    }

    /**
     * Tao hoc sinh
     * /students/create GET
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Luu sinh vien moi vao database
     * students/ POST
     */
    public function store(Request $request) //Request la mot doi tuong chua tat ca thong tin cua request gui len server
    {
        $request->validate([
            'name' => 'required',
            'skill' => 'required',
            'class' => 'required',
            'gpa' => 'required|numeric|min:0|max:4',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Student created successfully.');
    }

    
    /**
     * Hien thi thong tin chi tiet cua sinh vien.
     * students/{id} GET
     */
    public function show(Student $student) //Route Model Binding se tu dong lay du lieu tu database dua vao id cua sinh vien va truyen vao ham
    {
        $student->load('schoolClass'); //load de lay thong tin cua lop hoc cua sinh vien
        return view('students.show', compact('student'));
    }

    /**
     * Hien thi form sua sinh vien.
     * students/{id}/edit GET
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Cap nhat sinh vien trong database.
     * students/{id} PUT
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'skill' => 'required',
            'class' => 'required',
            'gpa' => 'required|numeric|min:0|max:4',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
                         ->with('success', 'Student updated successfully.');
    }

    /**
     * Xoa sinh vien khoi database.
     * students/{id} DELETE
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')
                         ->with('success', 'Student deleted successfully.');
    }
}
