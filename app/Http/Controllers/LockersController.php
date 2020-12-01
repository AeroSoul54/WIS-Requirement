<?php

namespace App\Http\Controllers;

use App\Locker;
use Illuminate\Http\Request;

class LockersController extends Controller
{
    public function index()
    {
    	//get all of the rooms
    	$lockers = Locker::get();
    	return view ('lockers.index', compact('lockers'));
    	;
    }
    public function show(Locker $locker)
    {
      return view ('lockers.show', compact('locker'));
    }
    public function create()
    {
    	$building_name = ['Main', 'Nursing', 'Science'];
    	return view('lockers.create', compact('buildings'));
    }

    public function store()
    {
    	$locker = new Locker;
    	$locker->building_name = request()->building_name;
    	$locker->locker_floor = request()->floor;
    	$locker->rent_sdate = request()->rent_sdate;
    	$locker->rent_edate = request()->rent_edate;
    	$locker->reservation_status = request()->reservation_status;
    	$locker->save();

    	return redirect('/lockers');
    }
    public function edit(Locker $locker)
    {
    	$building_name = ['Main', 'Nursing', 'Science'];
        return view('lockers.edit', compact('locker', 'building_name'));
    }
    public function update(Locker $locker)
    {
    	$locker->update([
    	'building_name'       => request()->building_name,
    	'locker_floor'        => request()->locker_floor,
    	'rent_sdate'          => request()->rent_sdate,
    	'rent_edate'          => request()->rent_edate,
    	'reservation_status'  => request()->reservation_status

    ]);
    	
         return redirect('/lockers');
    }
    
    public function delete(Locker $locker) 
    {
        $locker->delete();
        return redirect('/lockers');
    }
}
