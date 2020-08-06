<?php

use Illuminate\Database\Seeder;

class ProfessorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProfessorSchedule::class, 700)->create();
    }
}
