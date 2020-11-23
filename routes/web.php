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

/*Users*/

Route::get('/users', 'UsersController@index');
Route::get('/users/create', 'UsersController@create');
Route::get('/users/{user}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}', 'UsersController@update');
Route::get('/users/{user}/delete','UsersController@delete');


/*Devices*/

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

/*Students*/
Route::get('/students','StudentsController@index');//index
Route::get('/students/create','StudentsController@create');//create
Route::get('/students/{student}','StudentsController@show');//show
Route::post('/students','StudentsController@store'); //store
Route::get('/students/{student}/edit','StudentsController@edit');//edit
Route::put('/students/{student}','StudentsController@update');//update
Route::get('/students/{student}/delete','StudentsController@delete');//Delete

/*Books*/
//show all
Route::get('/', 'BooksController@index');
// GET create display form
Route::get('/books/create', 'BooksController@create');
//New record
Route::post('/books', 'BooksController@store');

//WILDCARDS
// PUT edit display form
Route::get('/books/{book}/edit', 'BooksController@edit');

// Edit a book record
Route::put('/books/{book}', 'BooksController@update');

// GET view individually
Route::get('/books/{id}', 'BooksController@show');

// GET delete 
Route::delete('/books/{book}', 'BooksController@remove');

/*Equipments*/

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
Route::get('/equipments/{equipment}/delete', 'EquipmentsController@delete');

/*Locker*/
Route::get('/lockers','LockersController@index');//index
Route::get('/lockers/create','LockersController@create');//create
Route::get('/lockers/{locker}','LockersController@show');//show
Route::post('/lockers','LockersController@store'); //store
Route::get('/lockers/{locker}/edit','LockersController@edit');//edit
Route::put('/lockers/{locker}','LockersController@update');//update
Route::get('/lockers/{locker}/delete','LockersController@delete');//Delete

/*Locker Rentings*/
Route::get('/lockerrentings','LockersRentingController@index');//index
Route::get('/lockerrentings/create','LockersRentingController@create');//create
Route::get('/lockerrentings/{lockerrenting}','LockersRentingController@show');//show
Route::post('/lockerrentings','LockersRentingController@store'); //store
Route::get('/lockerrentings/{lockerrenting}/edit','LockersRentingController@edit');//edit
Route::put('/lockerrentings/{lockerrenting}','LockersRentingController@update');//update
Route::get('/lockerrentings/{lockerrenting}/delete','LockersRentingController@delete');//Delete

/*Login*/

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@store');

Route::middleware(['auth'])->group(function() {
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/logout', 'LoginController@logout');
});


