<?php

use Illuminate\Database\Seeder;
use App\ClassType;

class ClassTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new ClassType;
        $c->name = 'Teoria';
        $c->save();

        $c = new ClassType;
        $c->name = 'Practica';
        $c->save();

        $c = new ClassType;
        $c->name = 'Apoyo/Consulta';
        $c->save();
    }
}
