<?php

namespace App\Http\Controllers;

use App\borrowed_equipment;
use App\Student;
use App\Equipment;
use Illuminate\Http\Request;

class borrowed_equipmentsController extends Controller
{
    public function index() 
    { 
    	$borrowed_equipments = borrowed_equipment::get();
    	return view('borrowed_equipments.index', compact('borrowed_equipments'));
    }

    public function show(borrowed_equipment $borrowed_equipment) 
    { 
    	return view('borrowed_equipments.show', compact('borrowed_equipment'));
    }

    public function create()
    {
    	$facilities = ['Sports Center', 'Multimedia'];
    	return view('borrowed_equipments.create', compact('facilities'));
    }

    public function store() 
    { 

        request()->validate([

            'number_of_item' => 'required',
            'equipment_id' => 'required',
            'student_id' => 'required',
            'facility' => 'required',
            'facilitator' => 'required',
            'rent_start_date' => 'required',
            'rent_end_date' => 'required'

        ]);

    	$borrowed_equipment = new borrowed_equipment;
        $borrowed_equipment->number_of_item = request()->number_of_item;
        $borrowed_equipment->equipment_id = request()->equipment_id;
        $borrowed_equipment->student_id = request()->student_id;
        $borrowed_equipment->facility = request()->facility;
        $borrowed_equipment->facilitator = request()->facilitator;
        $borrowed_equipment->rent_start_date = request()->rent_start_date;
        $borrowed_equipment->rent_end_date = request()->rent_end_date;
        $borrowed_equipment->save();

        return redirect('/borrowed_equipments');
    }

    public function edit(borrowed_equipment $borrowed_equipment) 
    { 
        $facilities = ['Sports Center', 'Multimedia'];
        return view('borrowed_equipments.edit', compact('borrowed_equipment', 'facilities'));
    }

    public function update(borrowed_equipment $borrowed_equipment)
    {

        $validated_fields = request()->validate([

            'number_of_item' => 'required',
            'equipment_id' => 'required',
            'student_id' => 'required',
            'facility' => 'required',
            'facilitator' => 'required',
            'rent_start_date' => 'required',
            'rent_end_date' => 'required'

        ]);

    
        $borrowed_equipment->update($validated_fields);

        return redirect('/borrowed_equipments');
    }

    public function delete(borrowed_equipment $borrowed_equipment) 
    {
        $borrowed_equipment->delete();
        return redirect('/borrowed_equipments');
    }
}
