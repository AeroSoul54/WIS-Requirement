<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    { 
    	return view('login');	
    }

    // public function login() 
    // {
    // 	$credentials = ['id_number' => request()->id_number, 'password' => request()->password];
    // 	if(Auth::attempt($credentials)) {
    // 		return 'Logged In';
    // 	}
    // 	return back()->withErrors([
    // 		'credentials' => 'Incorrect id number or password. Please try again'
    // 	]);
    // }
}
