<?php


namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
	//return view ('test');
    $books = Book::all();
    return view ('book.shelves', compact('books'));
    }

// Show individually
    public function show($id)
    {
    	$book = Book::find($id);
    	return view('book.show', compact('book'));
    }

// Form
    public function create()
    {
    	return view('book.create');
    }

// Add
    public function store()
    {
    	//new event
    	//dd(request()->all());
    	$book = new Book;
    	$book->Title = request()->title;
    	$book->Author = request()->author;
    	$book->Category = request()->category;
    	$book->Rent_Date = request()->rent_date;
    	$book->Due_Date = request()->due_date;
    	$book->Penalty = request()->penalty;
    	$book->save();

    	return redirect('/'); 
    }

//Update Record
    public function update(Book $book)
    {
    	$book = new Book;
    	$book->Title = request()->title;
    	$book->Author = request()->author;
    	$book->Category = request()->category;
    	$book->Rent_Date = request()->rent_date;
    	$book->Due_Date = request()->due_date;
    	$book->Penalty = request()->penalty;
    	$book->save();

    	return redirect('/books/'.$book->id); 
    }

 // Edit
 	public function edit(Book $book)
 	{
 		return view('book.edit', compact('book'));
 	}  

 // Delete
 	public function remove(Book $book)
 	{
 		$book->delete();
 		return redirect('/');
 	}




}
