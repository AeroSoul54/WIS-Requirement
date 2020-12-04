<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
             'Title'=> $faker->words(),
             'Author'=> $faker->name(),
             'Category'=> $faker->words()
    ];
});
