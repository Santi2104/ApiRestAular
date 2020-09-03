<?php

use App\ProfessorRole;
use Illuminate\Database\Seeder;

class ProfessorRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfessorRole::create([
            'name' => 'titular',
            'display_name' => 'Titular'
        ]);

        ProfessorRole::create([
            'name' => 'asociado',
            'display_name' => 'Asociado'
        ]);

        ProfessorRole::create([
            'name' => 'adjunto',
            'display_name' => 'Adjunto'
        ]);

        ProfessorRole::create([
            'name' => 'jtp',
            'display_name' => 'Jefe de trabajos practicos'
        ]);

        ProfessorRole::create([
            'name' => 'ayudante1',
            'display_name' => 'Ayudante 1°'
        ]);

        ProfessorRole::create([
            'name' => 'ayudante2',
            'display_name' => 'Ayudante 2°'
        ]);
    }
}
