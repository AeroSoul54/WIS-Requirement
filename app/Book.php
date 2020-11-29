<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'books';

     public function borrowed_books(){
    	return $this->belongsTo(BorrowedBook::class);
    }

}
