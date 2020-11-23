<?php

namespace App\Http\Controllers;

use App\Locker;
use Illuminate\Http\Request;

class LockersController extends Controller
{
    public function index() 
    { 
    	$lockers = locker::get();
    	return view('lockers.index', compact('lockers'));
    }

    public function show(Locker $locker) 
    { 
    	return view('lockers.show', compact('locker'));
    }

    public function create()
    {
    	$buildings = ['Nursing Building', 'Science Building'];
    	return view('lockers.create', compact('buildings'));
    	$floors = ['1st','2nd','3rd','4th','5th','6th','7th','8th',]
    	return view('lockers.create', compact('floors'));
    	
    }

    public function store() 
    { 

        request()->validate([

            'building_name' => 'required',
            'locker_floor' => 'required'

        ]);

    	$locker = new Locker;
        $locker->building_name = request()->building_name;
        $locker->locker_floor = request()->locker_floor;
        $locker->save();

        return redirect('/lockers');
    }

    public function edit(Locker $locker) 
    { 
        $buildings = ['Nursing Building', 'Science Building'];
    	return view('lockers.edit', compact('locker','buildings'));
    	$floors = ['1st','2nd','3rd','4th','5th','6th','7th','8th',]
    	return view('lockers.edit', compact('locker','floors'));
    }

    public function update(Locker $locker)
    {

        $validated_fields = request()->validate([

            'building_name' => 'required',
            'locker_floor' => 'required'

        ]);

    
        $locker->update($validated_fields);

        return redirect('/lockers');
    }

    public function delete(Locker $locker) 
    {
        $locker->delete();
        return redirect('/lockers');
    }
}

