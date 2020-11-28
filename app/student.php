<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $table = 'students';

    public function borrowedBooks(){
    	return $this->belongsToMany(BorrowedBook::class);
 
    }
    public function borrowed_devices(){
    	return $this->belongsToMany(borrowed_devices::class);
    }
}
