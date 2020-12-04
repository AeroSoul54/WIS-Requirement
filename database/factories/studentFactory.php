<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'id_number' => $faker->randomNumber(),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'college_department' => $faker->company()    

    ];
});
