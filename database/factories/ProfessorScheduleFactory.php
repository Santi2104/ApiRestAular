<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProfessorSchedule;
use Faker\Generator as Faker;

$factory->define(ProfessorSchedule::class, function (Faker $faker) {
    return [
        'professor_id' => \App\Professor::all()->random()->id,
        'academic_schedule_id' => \App\AcademicSchedule::all()->random()->id
    ];
});
