<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|string|max:40',
            'department' => 'required|string|max:255',
        ]);

        Student::create($request->all());

        return redirect()->back()->with('success', 'Student added successfully!');
    }

    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Student deleted successfully!');
    }

    // Show Edit Form
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    // Handle Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'department' => 'required|string|max:255',
        ]);

        $student = Student::findOrFail($id);
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'department' => $request->department,
        ]);

        return redirect()->route('student.index')->with('success', 'Student updated successfully!');
    }
}
