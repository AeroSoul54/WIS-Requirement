<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wis-requirementContoller extends Controller
{
    public function index ()
    {
    	return view('wis-requirement.index');
    }
}
