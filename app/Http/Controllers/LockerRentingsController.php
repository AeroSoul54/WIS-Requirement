<?php

namespace App\Http\Controllers;

use App\LockerRenting;
use Illuminate\Http\Request;

class LockerRentingsController extends Controller
{
    public function index() 
    { 

    	$lockerrentings = LockerRenting::get();
    	return view('lockerrentings.index', compact('lockerrentings'));
    }

    public function show(LockerRenting $lockerrenting) 
    { 
    	return view('lockerrentings.show', compact('lockerrenting'));
    }

    }
    public function create()
    {
    	$status = ['Avaiable','Currently Rented']
    	return view('lockerrentings.create', compact('status'));
    	
    }

    public function store() 
    { 

        request()->validate([

            'rent_startdate' => 'required',
            'rent_enddate' => 'required',
            'reservation_status' => 'required'

        ]);

    	$lockerrenting = new LockerRenting;
        $lockerrenting->rent_startdate = request()->rent_startdate;
        $lockerrenting->rent_enddate = request()->rent_enddate;
        $lockerrenting->reservation_status = request()->reservation_status;
        $lockerrenting->save();

        return redirect('/lockerrentings');
    }

    public function edit(LockerRenting $lockerrenting) 
    { 
        $status = ['Avaiable','Currently Rented']
    	return view('lockerrentings.edit', compact('lockerrenting','status'));
    }

    public function update(LockerRenting $lockerrenting)
    {

        $validated_fields = request()->validate([

            'rent_startdate' => 'required',
            'rent_enddate' => 'required',
            'reservation_status' => 'required'

        ]);

    
        $lockerrenting->update($validated_fields);

        return redirect('/lockerrentings');
    }

    public function delete(LockerRenting $lockerrenting) 
    {
        $lockerrenting->delete();
        return redirect('/lockerrentings');
    }
}

