<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'career_id' => \App\Career::all()->random()->id,
        'code' => $faker->userName,
        'title' => $faker->word
    ];
});
