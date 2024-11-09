<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;


use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{

    public function index(): View
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
        
    }

 
    public function create(): View
    {
        return view('students.create');
        
    }

  
    public function store(Request $request): RedirectResponse
{
    // Ensure user is authenticated
    if (Auth::check()) {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
        ]);

        // Retrieve the authenticated user's ID
        $userId = Auth::id();

        // Create a new student instance with user ID
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->user_id = $userId; // Assuming you have a user_id column in your students table
        $student->status = 'pending'; // Set the default status
        $student->save();

        // Redirect back with a success message
        return redirect('/dashboard')->with('flash_message', 'Student Added!');
    }

    // If user is not authenticated, handle the case accordingly
    return redirect('login')->with('error', 'Please log in to add a student.');
}




    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }

   
    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('/dashboard')->with('flash_message', 'student Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('/dashboard')->with('flash_message', 'Student deleted!'); 
    }


    
}