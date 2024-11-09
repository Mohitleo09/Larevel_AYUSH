<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\Mentor;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class MentorDashboardController extends Controller
{

    public function mentoradd()
    {
        $mentors = Mentor::all();
        return view('home.mentor_adddetails', compact('mentors'));
    }


    public function mentorhome()
    {
        $mentors = Mentor::all();
        return view('home.mentor_dashboard', compact('mentors'));
    }

    public function create(): View
    {
        return view('home.mentorcreate');
    }

    public function mentoredit(string $id): View
    {
        $mentor = Mentor::findOrFail($id);
        return view('home.mentoredit', compact('mentor'));
    }


//     public function mentorstore(Request $request)
// {
//     // Validate the incoming request data
//     $validator = Validator::make($request->all(), [
//         'mentor_name' => 'required',
//         'mentor_city' => 'required',
//         'mentor_state' => 'required',
//         'company' => 'required',
//         'mentor_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as needed
//     ]);

//     // If validation fails, redirect back with validation errors
//     if ($validator->fails()) {
//         return redirect()->back()->withErrors($validator)->withInput();
//     }

//     // Handle file upload
//     if ($request->hasFile('mentor_image')) {
//         $image = $request->file('mentor_image');
//         $imageName = time() . '.' . $image->getClientOriginalExtension();
//         $image->move(public_path('home/image'), $imageName);
//         $imagePath = 'home/image/' . $imageName;
//     }

//     // Create a new Mentor instance and save it to the database
//     $mentor = new Mentor();
//     $mentor->mentor_name = $request->input('mentor_name');
//     $mentor->mentor_image = $imagePath;
//     $mentor->mentor_city = $request->input('mentor_city');
//     $mentor->mentor_state = $request->input('mentor_state');
//     $mentor->company = $request->input('company');
//     $mentor->user_id = auth()->id(); // Assuming you're using Laravel's built-in authentication
//     $mentor->save();

//     // Redirect back to the mentor dashboard with a success message
//     return redirect('/mentoradd')->with('success', 'Mentor added successfully.');
// }

    

// public function mentorupdate(Request $request, string $id)
// {
//     try {
//         // Validate the incoming request data
//         $validator = Validator::make($request->all(), [
//             'mentor_name' => 'required',
//             'mentor_city' => 'required',
//             'mentor_state' => 'required',
//             'company' => 'required',
//             'mentor_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as needed
//         ]);

//         // If validation fails, redirect back with validation errors
//         if ($validator->fails()) {
//             return redirect()->back()->withErrors($validator)->withInput();
//         }

//         // Find the mentor by its ID
//         $mentor = Mentor::findOrFail($id);

//         // Handle the uploaded image if it exists
//         if ($request->hasFile('mentor_image')) {
//             $image = $request->file('mentor_image');
//             $imageName = time() . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('home/image'), $imageName);
//             $imagePath = 'home/image/' . $imageName;

//             // Delete the previous image if it exists
//             if ($mentor->mentor_image) {
//                 $previousImagePath = public_path($mentor->mentor_image);
//                 if (file_exists($previousImagePath)) {
//                     unlink($previousImagePath);
//                 } else {
//                     Log::warning('Previous image not found: ' . $mentor->mentor_image);
//                 }
//             }

//             // Update the image path in the database
//             $mentor->mentor_image = $imagePath;
//         }

//         // Update the mentor attributes with values from the request
//         $mentor->mentor_name = $request->input('mentor_name');
//         $mentor->Contact_Number = $request->input('Contact_Number');
//         $mentor->gmail = $request->input('gmail');
//         $mentor->mentor_city = $request->input('mentor_city');
//         $mentor->mentor_state = $request->input('mentor_state');
//         $mentor->about = $request->input('about');
//         $mentor->Gudience_areas = $request->input('Gudience_areas');
//         $mentor->save();

//         // Redirect back to the mentor dashboard with a success message
//         return redirect('/mentoradd')->with('success', 'updated successfully.');
//     } catch (\Exception $e) {
//         // Log any errors that occur
//         Log::error('Error updating mentor: ' . $e->getMessage());
//         // Redirect back with an error message
//         return redirect()->back()->with('error', 'An error occurred. Please try again later.');
//     }
// }



// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Log;

public function mentorstore(Request $request)
    {
        $request->validate([
            'mentor_name' => 'required|string|max:255',
            'Contact_Number' => 'required|string|max:15',
            'gmail' => 'required|email|max:255',
            'mentor_city' => 'required|string|max:255',
            'mentor_state' => 'required|string|max:255',
            'about' => 'required|string',
            'Gudience_areas' => 'required|string',
            'mentor_image' => 'nullable|image|max:2048',
        ]);

        // Save the data
        $mentor = new Mentor();
        $mentor->mentor_name = $request->mentor_name;
        $mentor->Contact_Number = $request->Contact_Number;
        $mentor->gmail = $request->gmail;
        $mentor->mentor_city = $request->mentor_city;
        $mentor->mentor_state = $request->mentor_state;
        $mentor->about = $request->about;
        $mentor->Gudience_areas = $request->Gudience_areas;

        // Handle file upload
        if ($request->hasFile('mentor_image')) {
            $imagePath = $request->file('mentor_image')->store('images', 'public');
            $mentor->mentor_image = $imagePath;
        }

        $mentor->save();

        return redirect()->route('dashboard')->with('success', 'Mentor details saved successfully.');
    }

    public function dashboard()
    {
        $mentors = Mentor::all();
        return view('dashboard', compact('mentors'));
    }
    

public function mentordestroy(string $id): RedirectResponse
{
    try {
        $mentor = Mentor::findOrFail($id);
        $mentor->delete();
        
        return redirect('/mentoradd')->with('success', 'deleted successfully.');
    } catch (\Exception $e) {
        \Log::error($e->getMessage());
        return redirect()->back()->with('error', 'An error occurred. Please try again later.');
    }
}


}
