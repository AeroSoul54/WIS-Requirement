<?php

use Illuminate\Database\Seeder;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $books = factory(App\Book::class, 15)->create();
    }
}
