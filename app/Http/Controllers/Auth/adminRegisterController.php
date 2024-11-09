<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Room;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use Illuminate\Support\Facades\View;

class adminRegisterController extends Controller
{
    /**
     * Instantiate a new adminRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Display an admin registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('auth.admin');
    }

    /**
     * Store a new admin user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:3|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 'admin', // Set the user_type to 'admin'
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('home.admindashboard')->withSuccess('You have successfully registered & logged in!');
    }

     /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    // public function login()
    // {
    //     return view('auth.login');
    // }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('home.admindashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');
    } 
    
   

    public function dashboard()
{
    // Check if the user is authenticated
    if (Auth::check()) {
        // Retrieve the currently logged-in user's ID
        $userId = Auth::id();

        // Retrieve the rooms associated with the user's ID
        $rooms = Room::where('user_id', $userId)->get();

        // Render the 'adminroomdashboard.blade.php' view
        return view('home.admindashboard', ['rooms' => $rooms]);
    }

    // If the user is not authenticated, redirect to the login page
    return redirect()->route('login')->withErrors([
        'email' => 'Please log in to access the dashboard.',
    ])->onlyInput('email');
}

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->withSuccess('You have logged out successfully!');
    }

   public function index() {
    $users = User::all(); // Fetch all users for the admin dashboard
    return view('admin.dashboard', compact('users'));
}


   
}
