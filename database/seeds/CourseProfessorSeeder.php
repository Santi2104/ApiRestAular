<?php

use Illuminate\Database\Seeder;

class CourseProfessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\CourseProfessor::class, 300)->create();
    }
}
