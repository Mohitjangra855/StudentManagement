<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Home page
    public function index()
    {

        $teachers = Teacher::with('students')->get();


        return view('teachers.index', compact('teachers'));
    }

    // create new page 
    public function create()
    {
        //
        return view('teachers.create');
    }
    // store data
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:teachers',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);
        $input = $request->all();
        $teacher = Teacher::create($input);
        return redirect('teacher');
    }
    // edit page
    public function edit(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teachers'));
    }

    //    update data
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);
        $input = $request->all();
        $teacher = Teacher::findOrFail($id);
        $teacher->update($input);
        return redirect('teacher')->with('flash_message', 'Teacher Updated!');
    }

    //   delete data
    public function destroy(string $id)
    {
        //
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect('teacher')->with('flash_message', 'Teacher Deleted!');
    }
}
