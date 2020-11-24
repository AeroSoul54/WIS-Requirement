<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() 
    { 

    	$users = User::get();
    	return view('users.index', compact('users'));
    }

    public function show(User $user) 
    { 
    	return view('users.show', compact('user'));
    }

    public function create()
    {
    	$facilities = ['Sports Center', 'Multimedia', 'Library'];
    	return view('users.create', compact('facilities'));
    }

    public function store() 
    { 

        $validated_fields = request()->validate([

            'name' => 'required',
            'email' => 'required|unique:users',
            'password'=> 'required',
            'facility' => 'required'

        ]);

    	$validated_fields['password'] = bcrypt($validated_fields['password']);
    	$users = User::create($validated_fields);
        return redirect('/users');
    }

    public function edit(User $user) 
    { 
        $facilities = ['Sports Center', 'Multimedia', 'Library'];
        return view('users.edit', compact('user', 'facilities'));
    }

    public function update(User $user)
    {

        $validated_fields = request()->validate([

            'name' => 'required',
            'email' => 'required|unique:users',
            'password'=> 'required',
            'facility' => 'required'

        ]);

    
        $user->update($validated_fields);

        return redirect('/users');
    }

    public function delete(User $user) 
    {
        $user->delete();
        return redirect('/users');
    }
}
