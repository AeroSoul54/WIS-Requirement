<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Index of CRUD
Route::get('/equipments', 'EquipmentsController@index');

// Create
Route::get('/equipments/create', 'EquipmentsController@create');

// Show - Read of CRUD 
Route::get('/equipments/{equipment}', 'EquipmentsController@show');

// Store
Route::post('/equipments', 'EquipmentsController@store');

// Edit
Route::get('/equipments/{equipment}/edit', 'EquipmentsController@edit');

// Update
Route::put('/equipments/{equipment}', 'EquipmentsController@update');


// Del
// Route::delete('/equipments/{equipment}', 'EquipmentsController@delete');
Route::get('/equipments/{equipment}/delete', 'EquipmentsController@delete');

