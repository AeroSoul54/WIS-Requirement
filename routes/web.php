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
	return view('layouts.home');
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
Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::post('/books', 'BooksController@store');
Route::get('/books/{book}/edit', 'BooksController@edit');
Route::put('/books/{book}', 'BooksController@update');
Route::get('/books/{book}', 'BooksController@show');
Route::delete('/books/{book}', 'BooksController@remove');

//books borrowed
Route::get('/rental_history/books','BooksBorrowedController@index');//index
Route::get('/rental_history/books/create','BooksBorrowedController@create');//create
Route::get('/rental_history/books/{borrowedBook}','BooksBorrowedController@show');//show
Route::post('/rental_history/books','BooksBorrowedController@store'); //store
Route::get('/rental_history/books/{borrowedBook}/edit','BooksBorrowedController@edit');//edit
Route::put('/rental_history/books/{borrowedBook}','BooksBorrowedController@update');//update
Route::get('/rental_history/books/{borrowedBook}/delete','BooksBorrowedController@delete');//Delete


/*Borrowed Equipments*/

Route::get('/borrowed_equipments', 'borrowed_equipmentsController@index');
Route::get('/borrowed_equipments/create', 'borrowed_equipmentsController@create');
Route::get('/borrowed_equipments/{borrowed_equipment}', 'borrowed_equipmentsController@show');
Route::post('/borrowed_equipments', 'borrowed_equipmentsController@store');
Route::get('/borrowed_equipments/{borrowed_equipment}/edit', 'borrowed_equipmentsController@edit');
Route::put('/borrowed_equipments/{borrowed_equipment}', 'borrowed_equipmentsController@update');
Route::get('/borrowed_equipments/{borrowed_equipment}/delete', 'borrowed_equipmentsController@delete');


/*Equipments*/

Route::get('/equipments', 'EquipmentsController@index');
Route::get('/equipments/create', 'EquipmentsController@create');
Route::post('/equipments', 'EquipmentsController@store');
Route::get('/equipments/{equipment}/edit', 'EquipmentsController@edit');
Route::put('/equipments/{equipment}', 'EquipmentsController@update');
Route::get('/equipments/{equipment}/delete', 'EquipmentsController@delete');

/*Locker Rents*/
Route::get('/locker_rents','LockerRentings@index');//index
Route::get('/locker_rents/create','LockerRentings@create');//create
Route::get('/locker_rents/{locker_renting}','LockerRentings@show');//show
Route::post('/locker_rents','LockerRentings@store'); //store
Route::get('/locker_rents/{locker_renting}/edit','LockerRentings@edit');//edit
Route::put('/locker_rents/{locker_renting}','LockerRentings@update');//update
Route::get('/locker_rents/{locker_renting}/delete','LockerRentings@delete');//Delete


/*Locker*/
Route::get('/lockers', 'LockersController@index');
Route::get('/lockers/create', 'LockersController@create');
Route::post('/lockers', 'LockersController@store');
Route::get('/lockers/{locker}/edit', 'LockersController@edit');
Route::put('/lockers/{locker}', 'LockersController@update');
Route::get('/lockers/{locker}/delete', 'LockersController@delete');


/*Login*/

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/register', 'LoginController@register');
Route::post('/register', 'LoginController@store');

Route::middleware(['auth'])->group(function() {
	Route::get('/dashboard', 'DashboardController@index');
	Route::get('/logout', 'LoginController@logout');
});



