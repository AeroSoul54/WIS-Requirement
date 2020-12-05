<?php

namespace App\Http\Controllers;

use App\Locker;
use Illuminate\Http\Request;

class LockersController extends Controller
{
    public function index()
    {     
        $lockers = Locker::get();
        return view ('lockers.index', compact('lockers'));
    }
     
    public function create()
    {
        $buildings = ['Nursing', 'Main', 'Science'];
        return view('lockers.create', compact('buildings'));

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
        $buildings = ['Nursing', 'Main', 'Science'];
        return view('lockers.edit', compact('locker', 'buildings'));
    }

    public function update(Locker $locker)
    {
        request()->validate([

        'building_name' => 'required',
        'locker_floor' => 'required' 

        ]);

        $locker->building_name = request()->building_name;
        $locker->locker_floor = request()->locker_floor;
        $locker->save();
        return redirect('/lockers');

    }
    
    public function delete(Locker $locker)
    {
        $locker->delete();
        return redirect('/lockers');

    }
}
