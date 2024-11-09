<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Student;
use App\Models\Mentor;
use App\Models\Investor;
use App\Models\Incubator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'dashboard']);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'number' => 'required|digits:10', 
            'password' => 'required|min:8|confirmed',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'about' => 'required|string|max:1000',
            'user_type' => 'required|in:mentor,investor,incubator,public',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->number,
            'password' => Hash::make($request->password),
            'city' => $request->city,
            'state' => $request->state,
            'about' => $request->about,
            'user_type' => $request->user_type,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('dashboard')->withSuccess('You have successfully registered & logged in!');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors(['email' => 'Your provided credentials do not match in our records.'])->onlyInput('email');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $userType = Auth::user()->user_type;
            $userId = Auth::id();
            $unseenCount = DB::table('ch_messages')
                ->where('to_id', '=', $userId)
                ->where('seen', '=', '0')
                ->count();

            $data = [
                'students' => Student::where('user_id', $userId)->get(),
                'unseenCount' => $unseenCount
            ];

            switch ($userType) {
                case 'admin':
                    $data += [
                        'mentors' => Mentor::all(),
                        'investors' => Investor::all(),
                        'incubators' => Incubator::all(),
                        'users' => User::all()
                    ];
                    return View::make('home.admindashboard', $data);

                case 'mentor':
                    $data['mentors'] = Mentor::where('user_id', $userId)->get();
                    return View::make('home.mentor_dashboard', $data);

                case 'investor':
                    $data['investors'] = Investor::all();
                    return View::make('home.investor_dashboard', $data);

                case 'incubator':
                    $data['incubators'] = Incubator::all();
                    return View::make('home.incubator_dashboard', $data);

                case 'public':
                    $data += [
                        'mentors' => Mentor::all(),
                        'investors' => Investor::all(),
                        'incubators' => Incubator::all(),
                        'users' => User::all()
                    ];
                    return View::make('home.userpage', $data);
            }
        }

        return redirect()->route('login')->withErrors(['email' => 'Please log in to access the dashboard.'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->withSuccess('You have logged out successfully!');
    }

    public function getmentor()
    {
        $mentors = Mentor::all();
        return response()->json($mentors);
    }
}
