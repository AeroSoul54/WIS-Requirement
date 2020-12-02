<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BorrowedBook;
use Faker\Generator as Faker;

$factory->define(BorrowedBook::class, function (Faker $faker) {
    return [
         'datetime_borrowed'=> $faker->dateTime(),
         'date_returned'=> $faker->date(),
         'due_date' => $faker->date(),
         'Penalty_in_Peso'=> $faker->randomFloat(2, 1, 10 )
         'student_id' => mt_rand(1,3), 
         'book_id' => mt_rand(1,4), 
    ];
});
