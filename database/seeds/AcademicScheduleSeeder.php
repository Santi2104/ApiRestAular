<?php

use Illuminate\Database\Seeder;

class AcademicScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\AcademicSchedule::class, 800)->create();
    }
}
