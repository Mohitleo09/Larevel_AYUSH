<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\Mentor;
use App\Models\Investor;


class UserController extends Controller
{

  

/**
     * Show the form for editing the user's profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Return the view with user data
        return view('students.edit_profile', compact('user'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
{
    // Get the authenticated user
    $user = Auth::user();

    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'password' => 'nullable|string|min:8|confirmed',
        'phone' => 'nullable|string|min:10',
        'city' => 'nullable|string|max:20',
        'state' => 'nullable|string|max:20',
        'about' => 'nullable|string|max:100',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:800',
    ]);

    // Update the user's name
    $user->name = $validatedData['name'];
    
    // Update the user's city
    $user->city = $validatedData['city'];
    
    // Update the user's state
    $user->state = $validatedData['state'];
    
    // Update the user's about
    $user->about = $validatedData['about'];

    // Update the user's email
    $user->email = $validatedData['email'];

    // If password is provided, update it
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = 'home/image/' . $imageName;
        $image->move(public_path('home/image'), $imageName);

        // Delete the previous image if it exists
        if ($user->image) {
            $previousImagePath = public_path($user->image);
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            } else {
                Log::warning('Previous image not found: ' . $user->image);
            }
        }

        // Update the image path in the database
        $user->image = $imagePath;
    }

    // Update the user's phone
    if ($request->filled('phone')) {
        $user->phone = $validatedData['phone'];
    }

    // Save the user
    $user->save();

    // Redirect back with a flash message
    return redirect()->route('dashboard')->with('success', 'Profile updated successfully!');
}
public function getmentor(){
    $mentors=Mentor::all();
    return response()->json($mentors);
}


public function getinvestor(){
    $investors=Investor::all();
    return response()->json($investors);
}

public function getincubator(){
    $incubators=Incubator::all();
    return response()->json($incubators);
}
}
