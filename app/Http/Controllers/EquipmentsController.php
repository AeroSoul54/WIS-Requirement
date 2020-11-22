<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index() 
    { 

    	$equipments = Equipment::get();
    	return view('equipments.index', compact('equipments'));
    }

    public function show(Equipment $equipment) 
    { 
    	return view('equipments.show', compact('equipment'));
    }

    public function create()
    {
    	$facilities = ['Sports Center', 'Multimedia'];
    	return view('equipments.create', compact('facilities'));
    }

    public function store() 
    { 
    	$equipment = new Equipment;
        $equipment->name = request()->name;
        $equipment->number_of_item = request()->number_of_item;
        $equipment->facility = request()->facility;
        $equipment->facilitator = request()->facilitator;
        $equipment->rent_start_date = request()->rent_start_date;
        $equipment->rent_end_date = request()->rent_end_date;
        $equipment->save();

        return redirect('/equipments');
    }

    public function edit(Equipment $equipment) 
    { 
        $facilities = ['Sports Center', 'Multimedia'];
        return view('equipments.edit', compact('equipment', 'facilities'));
    }

    public function update(Equipment $equipment)
    {
        $equipment->name = request()->name;
        $equipment->number_of_item = request()->number_of_item;
        $equipment->facility = request()->facility;
        $equipment->facilitator = request()->facilitator;
        $equipment->rent_start_date = request()->rent_start_date;
        $equipment->rent_end_date = request()->rent_end_date;
        $equipment->save();

        return redirect('/equipments');
    }

    public function delete(Equipment $equipment) 
    {
        $equipment->delete();
        return redirect('/equipments');
    }
}
