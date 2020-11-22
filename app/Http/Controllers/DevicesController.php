<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    public function index()
    {
        $devices = device::get();
        return view ('devices.index',compact('devices'));
    }
    public function show(Device $device)
    {
   
        return view('devices.show', compact('device'));

    }
    public function create()
    {
        
        return view('devices.create', compact('device'));

    }
    public function store()
    {
        $device = new Device;
        $device->name = request()->name;
        $device->serial_number = request()->serial_number;
        $device->save();
        return redirect('/devices');

    }
    public function edit (Device $device)
    {
        return view('devices.edit',compact('device'));
    }

    public function update(Device $device)
    {
   
        $device->name = request()->name;
        $device->serial_number = request()->serial_number;
        $device->save();
        return redirect('/devices');

    }
    public function delete(Device $device)
    {
        $device->delete();
        return redirect('/devices');

    }

}
