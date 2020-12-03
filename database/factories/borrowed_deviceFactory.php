<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\borrowed_device;
use Faker\Generator as Faker;

$factory->define(borrowed_device::class, function (Faker $faker) {
    return [
        'device_id' => mt_rand(1,4), 
        'student_id' =>function () {
            return factory(App\Student::class)->create()->id_number;
        },
        'date_time_borrowed' => $faker->date(),
        'return_due_date' => $faker->date(),
        'date_returned' => $faker->date(),
    ];
});
