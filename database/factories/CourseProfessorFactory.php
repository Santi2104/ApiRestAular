<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CourseProfessor;
use Faker\Generator as Faker;

$factory->define(CourseProfessor::class, function (Faker $faker) {
    return [
        'professor_id' => \App\Professor::all()->random()->id,
        'course_id' => \App\Course::all()->random()->id,
        'professor_role_id' => \App\ProfessorRole::all()->random()->id
    ];
});
