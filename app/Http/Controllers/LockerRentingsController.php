<?php

namespace App\Http\Controllers;

use App\LockerRenting;
use Illuminate\Http\Request;


class LockerRentingsController extends Controller
{
    public function index()
    {
    	//get all of the rooms
    	$locker_rentings = LockerRenting::get();
    	return view ('locker_rentings.index', compact('locker_rentings'));
    	
    }
    public function show(LockerRenting $locker_renting)
    {
      return view ('locker_rentings.show', compact('locker_renting'));
    }
    public function create()
    {
    	$reservation_status = ['Reserved', 'Open for reservation'];
    	return view('locker_rentings.create', compact('reservation_status'));
    }

    public function store()
    {
    	$locker_renting = new LockerRenting;
    	$locker_renting->rent_start_date = request()->rent_start_date;
    	$locker_renting->rent_end_date = request()->rent_end_date;
    	$locker_renting->reservation_status = request()->reservation_status;
    	$locker_renting->save();

    	return redirect('/locker_rents');
    }
    public function edit(LockerRenting $locker_renting)
    {
    	$reservation_status = ['Reserved', 'Open for reservation'];
    	return view('locker_rentings.create', compact('locker_renting','reservation_status'));;
    }
    public function update(LockerRenting $locker_renting)
    {
    	$locker_renting->update([
    	'rent_start_date'          => request()->rent_start_date,
    	'rent_end_date'          => request()->rent_end_date,
    	'reservation_status'  => request()->reservation_status

    ]);
    	
         return redirect('/locker_rents');
    }
    
    public function delete(LockerRenting $locker_renting) 
    {
        $locker_renting->delete();
        return redirect('/locker_rents');
    }
}
