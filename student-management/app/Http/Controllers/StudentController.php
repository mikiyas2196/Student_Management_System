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
}
