<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LockerRenting;
use Faker\Generator as Faker;

$factory->define(LockerRenting::class, function (Faker $faker) {
    return [
        'locker_rent_id' => mt_rand(1,4), 
        'student_id' =>function () {
            return factory(App\Student::class)->create()->id_number;
        },
        'rent_start_date' => $faker->date(),
        'rent_end_date' => $faker->date(),
        'reservation_status' => $faker->word
    ];
});
