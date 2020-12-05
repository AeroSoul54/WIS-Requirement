<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
        	['Title' => 'Twilight', 'Author' => 'Stephenie Meyer', 'Category' => 'Fiction'],
        	['Title' => 'The Da Vinci Code', 'Author' => 'Dan Brown', 'Category' => 'Fiction'],
        	['Title' => 'Harry Potter', 'Author' => 'J.K Rowling', 'Category' => 'Fiction'],
        	['Title' => 'The Cat in the Hat', 'Author' => 'Dr. Seuss', 'Category' => 'Fiction'],
        	['Title' => 'The Lightning Thief', 'Author' => 'Rick Riordan', 'Category' => 'Fiction'],
  		];

  		DB::table('books')->insert($books);
    }
}
