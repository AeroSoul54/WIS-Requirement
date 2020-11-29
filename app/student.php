<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $table = 'students';

    public function borrowed_books(){
    	return $this->belongsToMany(BorrowedBook::class);
    }

    public function borrowed_equipments()
    {
    	return $this->belongsToMany(borrowed_equipment::class);
    }
}
