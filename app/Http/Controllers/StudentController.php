<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\View\View;

class StudentController extends Controller
{
    //    index Page
    public function index(): View
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    // New Student Page
    public function create()
    {
        $Teachers = Teacher::all();
        return view('student.create')->with('teachers', $Teachers);
    }

    //    Store new student
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'teacher_id' => 'required|exists:teachers,id',
        ]);
        $input = $request->all();
        Student::create($input);
        return redirect('student')->with('flash_message', 'Student Addedd!');
    }

    // Display Page 
    public function show(string $id)
    {
        $students = Student::find($id);
        $teachers = Teacher::all();
        return view('student.show', compact('students',"teachers"));
    }

    //Edit Page
    public function edit(string $id)
    {
        $students = Student::find($id);
        $teachers = Teacher::all();
        return view('student.edit',compact('students', 'teachers'));
    }


    //   Update Student
    public function update(Request $request, string $id) {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
             'teacher_id' => 'required|exists:teachers,id',
        ]);
        $input = $request->all();
        $student = Student::find($id);
        $student->update($input);
        return redirect('student')->with('flash_message', 'Student Updated!');
    }

    //  Delete Student
    public function destroy(string $id): RedirectResponse
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('student')->with('flash_message', 'Student Deleted!');
    }
    
}
