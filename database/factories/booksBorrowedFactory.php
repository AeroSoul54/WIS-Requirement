<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BorrowedBook;
use Faker\Generator as Faker;

$factory->define(App\BorrowedBook::class, function (Faker $faker) {

	//$student = App\student::pluck('id_number')->toArray();

    return [
    	 'student_id' => mt_rand(1,3),
    	 'book_id' => mt_rand(1,3),		
         'datetime_borrowed'=> $faker->dateTime(),
         'due_date'=> $faker->date(),
         'date_returned'=> $faker->date(),
         'Penalty_in_Peso'=> $faker->randomFloat(2, 1, 10 )
    ];
});
