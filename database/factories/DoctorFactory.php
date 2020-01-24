<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Doctor;

$factory->define(Doctor::class, function (Faker $faker) {
    return [
        'Name' => $faker -> firstName, 
        'Lastname' => $faker -> lastName,
        'DayOfBirth' => $faker -> date,
        'Mail' => $faker->email,
        'Specialization' => $faker ->sentence($nbWords = 3, $variableNbWords = true)
    ];
});
