<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\student;
use Faker\Generator as Faker;

$factory->define(student::class, function (Faker $faker) {
    return [
        'borrowed_equipments_id' => mt_rand(1,3),
        'id_number' => $faker->randomNumber(),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'college_department' => $faker->company()    

    ];
});
