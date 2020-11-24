<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index() 
    { 
    	return view('login');	
    }

    public function login() 
    {
        // for validation
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

    	$credentials = ['email' => request()->email, 'password' => request()->password];
    	if(Auth::attempt($credentials)) {
    		return redirect('/dashboard'); 
    	}
    	return back()->withErrors([
            'credentials' => 'Incorrect Email or Password. Please try again'
        ]);
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect('/login');
    }

    public function register() 
    {
        return view('register');
    }

    public function store()
    {
        // for validation
        $validated_fields = request()->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
            'facility' => 'required'
        ]);

        $validated_fields['password'] = bcrypt($validated_fields['password']);
        $user = User::create($validated_fields);
        return redirect('/login');
    }
}
