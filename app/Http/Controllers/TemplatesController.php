<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    public function index()
    {
    	return view('templates.index');
    }

    	public function anotherPage()

    	{

         return view('templates.another_page');

    }

    public function extraPage()
    {

    	return view('templates.extra_page');
    }
}
