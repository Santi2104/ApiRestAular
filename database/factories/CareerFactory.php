<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Career;
use Faker\Generator as Faker;

$factory->define(Career::class, function (Faker $faker) {
    return [
        'department_id' => \App\Department::all()->random()->id,
        'name' => $faker->word,
        'description' => $faker->text(30),
        'code' => $faker->userName
    ];
});
