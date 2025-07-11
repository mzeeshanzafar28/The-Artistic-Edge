<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Session;

class loginController extends Controller
{
    // login
    public function loginpage(){
        return view('login.login');
    }

    // signup
    public function signuppage(){
        return view('login.signup');
    }

    public function signup(Request $request) {
        // Define validation rules
        $rules = [
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/', 'unique:users,name'],
             'email' => [
                    'required',
                    'email',
                    'max:500',
                    'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/'
                ],
           'password' => [
    'required',
    'string',
    'min:8',
    'confirmed',
    'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&^()_+])[A-Za-z\d@$!%*#?&^()_+]{8,}$/'
],

        ];

        // Validate the request
       $validator = Validator::make($request->all(), $rules, [
    'name.unique' => 'This username is already taken. Please choose a different one.',
    'email.unique' => 'This email address is already registered. Please use a different one.',
    'password.regex' => 'Password must be at least 8 characters and include at least one uppercase letter, one lowercase letter, one number, and one special character.',
]);

        // Handle validation failures
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user if validation passes
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Hash the password
        $user->save();

        // Redirect to the login page with a success message
        return redirect()->route('loginpage')->with('success', 'Signup successful. Please login.');
    }

    public function login(Request $request){
        $credentials = $request->only('name', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('main');
        } else {
            return redirect()->route('loginpage')->with('error', 'Invalid credentials.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginpage')->with('success', 'Logout successful.');
    }
}
