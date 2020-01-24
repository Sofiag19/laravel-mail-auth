<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Patient;

$factory->define(Patient::class, function (Faker $faker) {
    return [
        'Name' => $faker->firstName,
        'Lastname' => $faker->lastName,
        'DayOfBirth' => $faker->date,
        'Mail' => $faker->email,
        'Disease' => $faker -> sentence($nbWords = 3, $variableNbWords = true)
    ];
});
