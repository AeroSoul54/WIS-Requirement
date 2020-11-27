<?php

namespace App\Http\Controllers;

use App\BorrowedBook;
use App\Student;
use App\Book;
use Illuminate\Http\Request;

class BooksBorrowedController extends Controller
{
     public function index()
    {
        $borrowedBooks = BorrowedBook::all();
        return view ('book-rents.index',compact('borrowedBooks'));
    }

    public function show(BorrowedBook $borrowedBook)
    {
        return view('book-rents.show', compact('borrowedBook'));

    }
    public function create()
    {
        
        return view('book-rents.create', compact('borrowedBook'));

    }
    public function store()
    {

        request()->validate([
            'book_id' => 'required',
            'student_id' => 'required',
            'dateTime_borrowed' => 'required',
            'due_date' => 'required',
            ]);

        $borrowedBook = new BorrowedBook;
        $borrowedBook->book_id = request()->book_id;
        $borrowedBook->student_id = request()->student_id;
        $borrowedBook->dateTime_borrowed = request()->dateTime_borrowed;
        $borrowedBook->due_date = request()->due_date;
        $borrowedBook->date_returned = request()->date_returned;
        $borrowedBook->save();
        return redirect('/rental_history/books');


    }

    public function edit (BorrowedBook $borrowedBook)
    {
        return view('book-rents.edit',compact('borrowedBook'));
    }

    public function update(BorrowedBook $borrowedBook)
    {
        $borrowedBook->book_id = request()->device_id;
        $borrowedBook->student_id = request()->student_id;
        $borrowedBook->dateTime_borrowed = request()->date_time_borrowed;
        $borrowedBook->due_date = request()->return_due_date;
        $borrowedBook->date_returned = request()->date_returned;
        $borrowedBook->save();

         $validator = request()->validate([
            'book_id' => 'required',
            'student_id' => 'required',
            'dateTime_borrowed' => 'required',
            'due_date' => 'required',
            ]);
            
        
        return redirect('/rental_history/books/');
    }

    public function delete(BorrowedBook $borrowedBook)
    {
        $borrowedBook->delete();
        return redirect('/rental_history/books');

    }
}
