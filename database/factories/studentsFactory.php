<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
            'first_name'=> $faker->name,
            'last_name'=> $faker->name,
            'college_department'=> $faker->word,
            'password'= $faker->md5
    ];
});
