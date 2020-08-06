<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Department::class,1)->create(['name' => 'Departamento de Exactas', 'display_name' => 'Departamento Academico de Ciencias Exactas Fisicas y Naturales']);
        factory(\App\Department::class,1)->create(['name' => 'Departamento de Aplicadas', 'display_name' => 'Departamento Academico de Ciencias y Tecnologias Aplicadas al Ambiente, Produccion y Urbanismo']);
        factory(\App\Department::class,1)->create(['name' => 'Departamento de Humanidades', 'display_name' => 'Departamento Academico de Ciencias Humanas y de la Educacion']);
        factory(\App\Department::class,1)->create(['name' => 'Departamento de Sociales', 'display_name' => 'Departamento Academico de Ciencias Sociales, Juridicas y Economicas']);
        factory(\App\Department::class,1)->create(['name' => 'Departamento de Salud', 'display_name' => 'Departamento Academico de Ciencias de la Salud']);
    }
}
