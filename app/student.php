<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $table = 'students';

    public function borrowed_books(){
    	return $this->belongsToMany(BorrowedBook::class);
    }
}
