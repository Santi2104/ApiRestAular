<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudentSchedule;
use Faker\Generator as Faker;

$factory->define(StudentSchedule::class, function (Faker $faker) {
    return [
        'student_id' => \App\Student::all()->random()->id,
        'academic_schedule_id' => \App\AcademicSchedule::all()->random()->id
    ];
});
