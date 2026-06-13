<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\AdminUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the registration view.
     */
    public function showRegistrationForm(): View
    {
        return view('admin.auth.register');
    }

public function login(Request $request)
{
    
    // Validate form data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
// dd(Hash::make($request->password));
    // Find admin by email
    $admin = AdminUser::where('email', $request->email)->first();
 
    // Check admin exists and password matches
    if ($admin && Hash::check($request->password, $admin->password)) {

        // Log the admin into Laravel's auth system so middleware recognizes them
        Auth::login($admin);

        // Regenerate session to prevent fixation
        $request->session()->regenerate();

        // Update login info
        $admin->update([
            'last_logon' => now(),
            'no_logon' => $admin->no_logon + 1
        ]);

        return redirect()->intended(route('admin.dashboard', absolute: false))
                         ->with('success', 'Login successful');
    }

    return back()->with('error', 'Invalid email or password');
}

    /**
     * Handle an incoming registration request.
     */


public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()
            ->route('admin.login')
            ->with('success', 'Logged out successfully.');
}

 public function register(Request $request)
    {
        // dd($request); 
        // dd('Register method hit!', $request->all());
        $request->validate([
            'username' => 'required|string|max:32|unique:admin_users,username',
            'email' => 'required|email|max:64|unique:admin_users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);


        // dd($request);
        // Set default values for required fields
        $data = [
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'last_logon' => now(),
            'no_logon' => 0,
            'fname' => '',
            'lname' => '',
            'address' => '',
            'usertype' => 0,
            'image' => '',
            'added_on' => now(),
            'modified_on' => now()
        ];


        try {
            AdminUser::create($data);
            return redirect()->route('admin.login.submit')->with('success', 'Admin registered!');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }



}
