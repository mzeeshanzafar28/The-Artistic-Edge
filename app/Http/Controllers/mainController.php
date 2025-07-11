<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Hash;

class mainController extends Controller
{
    public function homepage(){
        if (Auth::check() &&  Auth::user()->name === 'admin') {
        return view ('admin.homepage');
    }
    return redirect()->route('main');
}

    public function adminlogin(){
        $staticUsername = 'admin';
        $staticPassword = 'password123';
    
        if (Auth::check() &&  Auth::user()->name === $staticUsername) {
            return redirect()->route('homepage');
        }
        return view ('admin.adminlogin');
    }
    public function adminlog(Request $request)
{
    // Validate the request
    $credentials = $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    // Static admin credentials
    $staticUsername = 'admin';
    $staticPassword = 'password123';

    // Check if the current user is logged in and is an admin
    if (Auth::check() &&  Auth::user()->name === $staticUsername) {
        return redirect()->route('homepage');
    }

    // Check if provided credentials match static admin credentials
    if ($credentials['username'] === $staticUsername && $credentials['password'] === $staticPassword) {
        // Find the admin user
        $adminUser = User::where('name', $staticUsername)->first();

        if ($adminUser && Hash::check($staticPassword, $adminUser->password)) {
            // Log out the current user (if any)
            Auth::logout();

            // Log in the admin user
            Auth::login($adminUser);

            // Redirect to homepage
            return redirect()->route('homepage');
        }
    }

    // If credentials don't match, redirect back with error
    return redirect()->route('adminlogin')->with('error', 'Invalid admin credentials.');
}
}
