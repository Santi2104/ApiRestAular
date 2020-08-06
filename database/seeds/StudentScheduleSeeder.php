<?php

use Illuminate\Database\Seeder;

class StudentScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\StudentSchedule::class, 800)->create();
    }
}
