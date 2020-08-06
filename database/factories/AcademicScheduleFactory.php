<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AcademicSchedule;
use Faker\Generator as Faker;

$factory->define(AcademicSchedule::class, function (Faker $faker) {
    return [
        'course_id' => \App\Course::all()->random()->id,
        'classroom_id' => \App\Classroom::all()->random()->id,
        'schedule_id' => \App\Schedule::all()->random()->id,
        'class_type_id' => \App\ClassType::all()->random()->id
    ];
});
