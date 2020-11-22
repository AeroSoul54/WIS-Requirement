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
//Devices
Route::get('/devices','devicesController@index');//index

Route::get('/devices/create','devicesController@create');//create

Route::get('/devices/{device}','devicesController@show');//show

Route::post('/devices','devicesController@store'); //store

Route::get('/devices/{device}/edit','devicesController@edit');//edit

Route::put('/devices/{device}','devicesController@update');//update

Route::get('/devices/{device}/delete','devicesController@delete');//Delete

//devices = devices_borrowed, device = device_borrowed
Route::get('/borrowed_devices','borrowed_devicesController@index');//index

Route::get('/borrowed_devices/create','borrowed_devicesController@create');//create

Route::get('/borrowed_devices/{borrowed_device}','borrowed_devicesController@show');//show

Route::post('/borrowed_devices','borrowed_devicesController@store'); //store

Route::get('/borrowed_devices/{borrowed_device}/edit','borrowed_devicesController@edit');//edit

Route::put('/borrowed_devices/{borrowed_device}','borrowed_devicesController@update');//update

Route::get('/borrowed_devices/{borrowed_device}/delete','borrowed_devicesController@delete');//Delete


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

