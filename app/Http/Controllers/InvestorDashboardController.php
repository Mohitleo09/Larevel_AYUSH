<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\Investor;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class InvestorDashboardController extends Controller
{

    public function investoradd()
    {
        $investors = Investor::all();
        return view('home.investor_adddetails', compact('investors'));
    }



    public function investorfulldetail()
    {
        $investors = Investor::all();
        return view('home.investor_fulldetails', compact('investors'));
    }

    public function investorhome()
    {
        $investors = Investor::all();
        return view('home.investor_dashboard', compact('investors'));
    }

    public function create(): View
    {
        return view('home.investorcreate');
    }

    public function investoredit(string $id): View
    {
        $investor = Investor::findOrFail($id);
        return view('home.investoredit', compact('investor'));
    }


    public function investorstore(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'investor_company_name' => 'required|string|max:255',
            'investor_city' => 'required|string|max:255',
            'investor_state' => 'required|string|max:255',
            'investor_amount' => 'required|numeric',
            'investor_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if there is one
        if ($request->hasFile('investor_logo')) {
            $logoPath = $request->file('investor_logo')->store('logos', 'public');
        } else {
            $logoPath = null;
        }

        // Create a new Investor record
        Investor::create([
            'company_name' => $request->investor_company_name,
            'city' => $request->investor_city,
            'state' => $request->investor_state,
            'amount' => $request->investor_amount,
            'logo' => $logoPath,
        ]);

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard')->with('success', 'Investor details saved successfully!');
    }

    

    

public function investorupdate(Request $request, string $id)
{
    try {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'investor_company_name' => 'required',
            'investor_city' => 'required',
            'investor_state' => 'required',
            'investor_amount' => 'required',
            'investor_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size as needed
        ]);

        // If validation fails, redirect back with validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the investor by its ID
        $investor = Investor::findOrFail($id);

        // Handle the uploaded image if it exists
        if ($request->hasFile('investor_logo')) {
            $image = $request->file('investor_logo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('home/image'), $imageName);
            $imagePath = 'home/image/' . $imageName;

            // Delete the previous image if it exists
            if ($investor->investor_logo) {
                $previousImagePath = public_path($investor->investor_logo);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                } else {
                    Log::warning('Previous image not found: ' . $investor->investor_logo);
                }
            }

            // Update the image path in the database
            $investor->investor_logo = $imagePath;
        }

        // Update the investor attributes with values from the request
        $investor->investor_company_name = $request->input('investor_company_name');
        $investor->investor_city = $request->input('investor_city');
        $investor->investor_state = $request->input('investor_state');
        $investor->investor_amount = $request->input('investor_amount');
        $investor->save();

        // Redirect back to the investor dashboard with a success message
        return redirect('/investoradd')->with('success', 'updated successfully.');
    } catch (\Exception $e) {
        // Log any errors that occur
        Log::error('Error updating investor: ' . $e->getMessage());
        // Redirect back with an error message
        return redirect()->back()->with('error', 'An error occurred. Please try again later.');
    }
}


public function investordestroy(string $id): RedirectResponse
{
    try {
        $investor = Investor::findOrFail($id);
        $investor->delete();
        
        return redirect('/investoradd')->with('success', 'deleted successfully.');
    } catch (\Exception $e) {
        \Log::error($e->getMessage());
        return redirect()->back()->with('error', 'An error occurred. Please try again later.');
    }
}


}
