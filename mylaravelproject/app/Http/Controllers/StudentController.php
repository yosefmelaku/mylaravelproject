<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of all students (with search functionality)
     */
    public function index(Request $request)
    {
        // Get search query from the request
        $search = $request->get('search');
        
        // If there's a search query, filter students
        if ($search) {
            $students = Student::where('first_name', 'LIKE', "%{$search}%")
                              ->orWhere('last_name', 'LIKE', "%{$search}%")
                              ->orWhere('email', 'LIKE', "%{$search}%")
                              ->paginate(10);
        } else {
            // Otherwise, get all students with pagination
            $students = Student::paginate(10);
        }
        
        // Return the view with students data
        return view('students.index', compact('students', 'search'));
    }

    /**
     * Show the form for creating a new student
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student in the database
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required|string|max:20',
            'department' => 'required|string|max:255',
        ]);
        
        // Create the student in the database
        Student::create($validated);
        
        // Redirect back to students list with success message
        return redirect()->route('students.index')
                        ->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified student (optional - for viewing details)
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified student in the database
     */
    public function update(Request $request, string $id)
    {
        // Find the student
        $student = Student::findOrFail($id);
        
        // Validate the incoming data (email must be unique except for this student)
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required|string|max:20',
            'department' => 'required|string|max:255',
        ]);
        
        // Update the student
        $student->update($validated);
        
        // Redirect back to students list with success message
        return redirect()->route('students.index')
                        ->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified student from the database
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        
        return redirect()->route('students.index')
                        ->with('success', 'Student deleted successfully!');
    }
}
