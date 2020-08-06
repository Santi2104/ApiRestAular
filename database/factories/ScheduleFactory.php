<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'period_id' => \App\Period::all()->random()->id,
        'start' => $faker->dateTimeThisYear,
        'end' => $faker->dateTimeThisYear,
        'color' => $faker->hexcolor
    ];
});
