<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Models\Incubator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;



class IncubatorDashboardController extends Controller
{

    public function incubatoradd()
    {
        $incubators = Incubator::all();
        return view('home.incubator_adddetails', compact('incubators'));
    }


    public function incubatorhome()
    {
        $incubators = Incubator::all();
        return view('home.incubator_dashboard', compact('incubators'));
    }

    public function create(): View
    {
        return view('home.incubatorcreate');
    }

    public function incubatoredit(string $id): View
    {
        $incubator = Incubator::findOrFail($id);
        return view('home.incubatoredit', compact('incubator'));
    }


    public function incubatorstore(Request $request)
    {
        $validated = $request->validate([
            'incubator_company_name' => 'required|string|max:255',
            'incubator_city' => 'required|string|max:255',
            'incubator_state' => 'required|string|max:255',
            'incubator_program_duration' => 'required|integer',
            'incubator_logo' => 'nullable|image|max:1024', // Max size 1MB
        ]);

        if ($request->hasFile('incubator_logo')) {
            $path = $request->file('incubator_logo')->store('logos', 'public');
        }

        Incubator::create([
            'company_name' => $validated['incubator_company_name'],
            'city' => $validated['incubator_city'],
            'state' => $validated['incubator_state'],
            'program_duration' => $validated['incubator_program_duration'],
            'logo_path' => $path ?? null,
        ]);

        return redirect()->route('dashboard')->with('success', 'Incubator details saved successfully!');
    }



public function incubatordestroy(string $id): RedirectResponse
{
    try {
        $incubator = Incubator::findOrFail($id);
        $incubator->delete();
        
        return redirect('/incubatoradd')->with('success', 'deleted successfully.');
    } catch (\Exception $e) {
        \Log::error($e->getMessage());
        return redirect()->back()->with('error', 'An error occurred. Please try again later.');
    }
}



}
