<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index() 
    { 

 public function index()
    {
        $equipments = equipment::get();
        return view ('equipments.index',compact('equipments'));
    }
    public function show(Equipment $equipment)
    {
   
        return view('equipments.show', compact('equipment'));

    }
    public function create()
    {
        
        return view('equipments.create', compact('equipment'));

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
    public function edit (Equipment $equipment)
    {
        return view('equipments.edit',compact('equipment'));
    }

    public function update(Equipment $equipment)
    {

        $validated_fields = request()->validate([

            'name' => 'required',
            'number_of_item' => 'required',
            'facility' => 'required',
            'facilitator' => 'required',
            'rent_start_date' => 'required',
            'rent_end_date' => 'required'

        ]);
    }
    public function delete(Student $equipment)
    {
        $equipment->delete();
        return redirect('/equipments');

    }

}

