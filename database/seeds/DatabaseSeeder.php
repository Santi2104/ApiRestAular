<?php

use App\ProfessorRole;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DepartmentSeeder::class);
        $this->call(CareerSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ClassRoomTypeSeeder::class);
        $this->call(BuildingSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PeriodSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(ClassTypeSeeder::class);
        $this->call(ProfessorRoleSeeder::class);

        

        factory(\App\User::class, 1)->create([
        	'name' => 'Sergio Denis',
	        'email' => 'admin@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => 1
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 1)->create([
        	'name' => 'Juan Carlos Bodoque',
	        'email' => 'bedel_aplicadas@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => 2
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 1)->create([
        	'name' => 'Tulio Triviño',
	        'email' => 'bedel_exactas@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => 3
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 1)->create([
        	'name' => 'Mario Hugo',
	        'email' => 'bedel_humanidades@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => 6
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 1)->create([
        	'name' => 'Juanín Juan Harry',
	        'email' => 'bedel_salud@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => 4
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 1)->create([
        	'name' => 'Patana',
	        'email' => 'bedel_sociales@mail.com',
	        'password' => bcrypt('secret'),
	        'role_id' => 5
        ])
        ->each(function (\App\User $u) {
        	factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 500)->create([
            'role_id' => 8
        ])
        ->each(function (\App\User $u) {
            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 300)->create([
            'role_id' => 7
        ])
        ->each(function (\App\User $u) {
            factory(\App\Professor::class, 1)->create(['user_id' => $u->id]);
        });

        $this->call(AcademicScheduleSeeder::class);
        $this->call(StudentScheduleSeeder::class);
        $this->call(ProfessorScheduleSeeder::class);
        $this->call(CourseProfessorSeeder::class);

    }
}
