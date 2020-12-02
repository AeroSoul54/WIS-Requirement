<?php

use Illuminate\Database\Seeder;

class booksBorroweSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $borrowed_books = factory(\App\BorrowedBook::class, 15)->create();
    }
}
