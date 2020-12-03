<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\borrowed_equipment;
use Faker\Generator as Faker;

$factory->define(borrowed_equipment::class, function (Faker $faker) {
    return [
        'student_id' => function () {
            return factory(App\Student::class)->create()->id_number;
        }, 
        'equipment_id' => mt_rand(1,4), 
        'number_of_item' => mt_rand(0,15),
        'rent_start_date' => $faker->date(),
        'rent_end_date' => $faker->date(),
        'facility' => $faker->company(),
        'facilitator' => $faker->name()
    ];
});

