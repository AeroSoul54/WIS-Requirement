<?php

namespace App\Http\Controllers;

use App\borrowed_device;
use Illuminate\Http\Request;

class borrowed_devicesController extends Controller
{
    public function index()
    {
        $borrowed_devices = borrowed_device::get();
        return view ('borrowed_devices.index',compact('borrowed_devices'));
    }
    public function show(borrowed_device $borrowed_device )
    {
   
        return view('borrowed_devices.show', compact('borrowed_device'));

    }
    public function create()
    {
        
        return view('borrowed_devices.create', compact('borrowed_device'));

    }
    public function store()
    {
        $borrowed_device = new borrowed_device;
        $borrowed_device->device_id = request()->device_id;
        $borrowed_device->student_id = request()->student_id;
        $borrowed_device->date_time_borrowed = request()->date_time_borrowed;
        $borrowed_device->return_due_date = request()->return_due_date;
        $borrowed_device->date_returned = request()->date_returned;
        $borrowed_device->save();
        return redirect('/borrowed_devices');


    }
    public function edit (borrowed_device $borrowed_device)
    {
        return view('borrowed_devices.edit',compact('borrowed_device'));
    }
    public function update(borrowed_device $borrowed_device)
    {
   
        $borrowed_device = new borrowed_device;
        $borrowed_device->device_id = request()->device_id;
        $borrowed_device->student_id = request()->student_id;
        $borrowed_device->date_time_borrowed = request()->date_time_borrowed;
        $borrowed_device->return_due_date = request()->return_due_date;
        $borrowed_device->date_returned = request()->date_returned;
        $borrowed_device->save();
        return redirect('/borrowed_devices');

    }
    public function delete(borrowed_device $borrowed_device)
    {
        $borrowed_device->delete();
        return redirect('/borrowed_devices');

    }
}
