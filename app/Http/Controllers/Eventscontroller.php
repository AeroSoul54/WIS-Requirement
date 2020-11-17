<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Eventscontroller extends Controller
{
    public function index()

    {
    	return view('Events.index');
    }
}
