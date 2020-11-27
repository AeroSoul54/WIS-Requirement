<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
    protected $table = 'books_borrowed';

     public function students(){
    	return $this->hasMany(Student::class, 'id_number', 'student_id');
    }

    public function book(){
    	return $this->hasOne(Book::class, 'id', 'book_id');
    }
}
