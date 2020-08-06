<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(\App\Role::class, 1)->create(['name' => 'admin', 'display_name' => 'Administrador del Sistema']);
       factory(\App\Role::class, 1)->create(['name' => 'bedelAplicadas','display_name' => 'Bedel del Departamento de Aplicadas']);
       factory(\App\Role::class, 1)->create(['name' => 'bedelExactas','display_name' => 'Bedel del Departamento de Exactas']);
       factory(\App\Role::class, 1)->create(['name' => 'bedelSalud','display_name' => 'Bedel del Departamento de Salud']);
       factory(\App\Role::class, 1)->create(['name' => 'bedelSociales','display_name' => 'Bedel del Departamento de Sociales']);
       factory(\App\Role::class, 1)->create(['name' => 'bedelHumanidades', 'display_name' => 'Bedel del Departamento de Humanidades']);        
       factory(\App\Role::class, 1)->create(['name' => 'teacher','display_name' => 'Profesor']);
       factory(\App\Role::class, 1)->create(['name' => 'student','display_name' => 'Estudiante']);
    }
}
