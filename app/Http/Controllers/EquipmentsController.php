<?php

namespace App\Http\Controllers;

use App\Equipment;
use Illuminate\Http\Request;

class EquipmentsController extends Controller
{
    public function index()
    {     
        $equipments = Equipment::get();
        return view ('equipments.index',compact('equipments'));
    }
     
    public function create()
    {
        return view('equipments.create', compact('equipment'));

    }
    public function store()
    {
        request()->validate([
        'name' => 'required',
        'model' => 'required' 

    	]);

        $equipment = new Equipment;
        $equipment->name = request()->name;
        $equipment->model = request()->model;
        $equipment->save();
        return redirect('/equipments');

    }
    public function edit(Equipment $equipment)
    {
        return view('equipments.edit',compact('equipment'));
    }

    public function update(Equipment $equipment)
    {
        request()->validate([
            'name' => 'required',
            'model' => 'required'

            ]);

        $equipment->name = request()->name;
        $equipment->model = request()->model;
        $equipment->save();
        return redirect('/equipments');

    }
    
    public function delete(Equipment $equipment)
    {
        $equipment->delete();
        return redirect('/equipments');

    }
}
