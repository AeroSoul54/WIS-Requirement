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

     //Index - Read of CRUD

    Route::get('/lockers', 'LockersController@index' )

    //Create
    Route::get('/lockers/create', 'LockersController@create');
    
    // Show - Read of CRUD
    Route::get('/lockers/{locker}', 'LockersController@show');

    //  	Store
    Route::post('/lockers', 'LockersController@store');


    //Edit
        Route::get('/lockers/{locker}/edit', 'LockersController@edit');

   //Update
     Route::put('/lockers/{locker}', 'LockersController@update');


   //Delete
     Route::delete('/lockers/{locker}', 'LockersController@delete()');
     Route::get('/lockers/{locker}/delete', 'LockersController@delete');